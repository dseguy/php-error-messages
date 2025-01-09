.. _unlink-of-"%s"-failed,-file-does-not-exist:

unlink of "%s" failed, file does not exist
------------------------------------------
 
	.. meta::
		:description:
			unlink of "%s" failed, file does not exist: PHP reports failure when trying to remove a file that does not exists in a phar archive.

		:og:type: article
		:og:title: unlink of &quot;%s&quot; failed, file does not exist
		:og:description: PHP reports failure when trying to remove a file that does not exists in a phar archive
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/unlink-of-%5C%22%25s%5C%22-failed%2C-file-does-not-exist.html

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
