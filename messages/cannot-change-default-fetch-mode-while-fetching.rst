.. _cannot-change-default-fetch-mode-while-fetching:

Cannot change default fetch mode while fetching
-----------------------------------------------
 
.. meta::
	:description:
		Cannot change default fetch mode while fetching: ``PDOStatement::setFetchMode()`` refuses to run while the statement is in the middle of fetching a row.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot change default fetch mode while fetching
	:og:description: ``PDOStatement::setFetchMode()`` refuses to run while the statement is in the middle of fetching a row
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-change-default-fetch-mode-while-fetching.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot change default fetch mode while fetching
	:twitter:description: Cannot change default fetch mode while fetching: ``PDOStatement::setFetchMode()`` refuses to run while the statement is in the middle of fetching a row
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-change-default-fetch-mode-while-fetching.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-change-default-fetch-mode-while-fetching.html","name":"Cannot change default fetch mode while fetching","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:32:23 +0000","dateModified":"Sat, 25 Jul 2026 12:32:23 +0000","description":"``PDOStatement::setFetchMode()`` refuses to run while the statement is in the middle of fetching a row","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-change-default-fetch-mode-while-fetching.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``PDOStatement::setFetchMode()`` refuses to run while the statement is in the middle of fetching a row. This happens when ``PDO::FETCH_CLASS`` is used and the constructor of the target class receives the statement object itself (via the constructor arguments) and calls ``setFetchMode()`` on it before the current ``fetch()`` call has finished.

Prior to this guard, such a re-entrant call could corrupt the statement's internal fetch state and lead to a use-after-free. PDO now detects the situation and throws an ``Error`` instead.

Example
_______

.. code-block:: php

   <?php
   
   class Test {
       public string $val1;
       public string $val2;
   
       public function __construct(mixed $stmt) {
           if ($stmt instanceof PDOStatement) {
               // Re-entrant call -- the statement is still fetching the current row
               $stmt->setFetchMode(PDO::FETCH_CLASS, self::class, [$this->val2]);
           }
       }
   }
   
   $stmt = $pdo->prepare('SELECT val1, val2 FROM example');
   $stmt->setFetchMode(PDO::FETCH_CLASS, Test::class, [$stmt]);
   $stmt->execute();
   
   $stmt->fetch();
   
   ?>

Solutions
_________

+ Call ``setFetchMode()`` before ``fetch()``/``fetchAll()`` starts, never from within a constructor triggered by the fetch itself.
+ Avoid passing the live ``PDOStatement`` as a constructor argument to the fetched class; pass the data it needs instead.
+ If the fetch mode must change mid-iteration, finish consuming the current row first, then call ``setFetchMode()`` before the next ``fetch()``.

See Also
________

+ `PDOStatement::setFetchMode <https://www.php.net/manual/en/pdostatement.setfetchmode.php>`_
+ `PDOStatement::fetch <https://www.php.net/manual/en/pdostatement.fetch.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
