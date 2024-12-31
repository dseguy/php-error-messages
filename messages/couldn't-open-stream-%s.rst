.. _couldn't-open-stream-%s:

Couldn't open stream %s
-----------------------
 
	.. meta::
		:description:
			Couldn't open stream %s: When opening a stream, or file, a mode of operation is needed.

		:og:type: article
		:og:title: Couldn&#039;t open stream %s
		:og:description: When opening a stream, or file, a mode of operation is needed
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/couldn%27t-open-stream-%25s.html

Description
___________
 
When opening a stream, or file, a mode of operation is needed. 

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.

All other strings are not supported, and yield this error.


Example
_______

.. code-block:: php

   <?php
   
   //`+k' is not a valid mode for fopen 
   // k is not an open option
   fopen($path, '+k');
   
   //`+wr' is not a valid mode for fopen 
   // write-only w, read-only r and + are mutually exclusive
   // w+, r+ and rw are all valid
   fopen($path, '+wr');
   
   
   ?>

Solutions
_________

+ Use only valid stream open modes.

See Also
________

+ `fopen <https://www.php.net/manual/en/function.fopen.php>`_


In more recent PHP versions, this error message is now :ref:`couldn't-open-stream:-%s`.
