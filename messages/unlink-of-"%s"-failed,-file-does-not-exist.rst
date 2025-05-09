.. _unlink-of-"%s"-failed,-file-does-not-exist:

unlink of "%s" failed, file does not exist
------------------------------------------
 
.. meta::
	:description:
		unlink of "%s" failed, file does not exist: PHP reports failure when trying to remove a file that does not exists in a phar archive.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: unlink of &quot;%s&quot; failed, file does not exist
	:og:description: PHP reports failure when trying to remove a file that does not exists in a phar archive
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unlink-of-%22%25s%22-failed%2C-file-does-not-exist.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unlink of "%s" failed, file does not exist
	:twitter:description: unlink of "%s" failed, file does not exist: PHP reports failure when trying to remove a file that does not exists in a phar archive
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unlink-of-\"%s\"-failed,-file-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unlink-of-\"%s\"-failed,-file-does-not-exist.html","name":"unlink of \"%s\" failed, file does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"PHP reports failure when trying to remove a file that does not exists in a phar archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unlink-of-\"%s\"-failed,-file-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP reports failure when trying to remove a file that does not exists in a phar archive. This error message does not appear when using the regular filesystem, or the ``delete`` method on a ``phar`` object.

This error message is part of the stream system.

Example
_______

.. code-block:: php

   <?php
   
   try {
       $phar = new Phar('/tmp/myphar.phar');
       $phar->addFromString('foo.txt', 'hello');
       unset($phar);
   
       $phar = new Phar('/tmp/myphar.phar');
       unlink('phar:///tmp/myphar.phar/oops');
   } catch (Exception $e) {
       // handle errors
       print $e->getMessage();
   }
   ?>


Literal Examples
****************
+ unlink of "oops" failed, file does not exist

Solutions
_________

+ Check if the file is available before removing it, with ``Phar::offsetExists``.

Related Error Messages
______________________

+ :ref:`entry-%s-does-not-exist-and-cannot-be-deleted`
+ :ref:`no-such-file-or-directory`
