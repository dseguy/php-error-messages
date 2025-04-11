.. _entry-%s-does-not-exist-and-cannot-be-deleted:

Entry %s does not exist and cannot be deleted
---------------------------------------------
 
.. meta::
	:description:
		Entry %s does not exist and cannot be deleted: PHP reports failure when trying to remove a file that does not exists in a phar archive.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Entry %s does not exist and cannot be deleted
	:og:description: PHP reports failure when trying to remove a file that does not exists in a phar archive
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/entry-%25s-does-not-exist-and-cannot-be-deleted.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Entry %s does not exist and cannot be deleted
	:twitter:description: Entry %s does not exist and cannot be deleted: PHP reports failure when trying to remove a file that does not exists in a phar archive
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/entry-%s-does-not-exist-and-cannot-be-deleted.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/entry-%s-does-not-exist-and-cannot-be-deleted.html","name":"Entry %s does not exist and cannot be deleted","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP reports failure when trying to remove a file that does not exists in a phar archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/entry-%s-does-not-exist-and-cannot-be-deleted.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP reports failure when trying to remove a file that does not exists in a phar archive. This error message is specific to the ``Phar::delete`` method.

Example
_______

.. code-block:: php

   <?php
   
   try {
       $phar = new Phar('/tmp/myphar.phar');
       $phar->addFromString('foo.txt', 'hello');
       unset($phar);
   
       $phar = new Phar('/tmp/myphar.phar');
       $phar->delete('/oops');
   } catch (Exception $e) {
       // handle errors
       print $e->getMessage();
   }
   
   ?>


Literal Examples
****************
+ Entry oops does not exist and cannot be deleted

Solutions
_________

+ Check if the file exists before removing it.

Related Error Messages
______________________

+ :ref:`no-such-file-or-directory`
+ :ref:`unlink-of-"%s"-failed,-file-does-not-exist`
