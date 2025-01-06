.. _`%s'-is-not-a-valid-mode-for-fopen:

`%s' is not a valid mode for fopen
----------------------------------
 
	.. meta::
		:description:
			`%s' is not a valid mode for fopen: There are several modes when opening a file, as passed with the 2nd argument.

		:og:type: article
		:og:title: `%s&#039; is not a valid mode for fopen
		:og:description: There are several modes when opening a file, as passed with the 2nd argument
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%60%25s%27-is-not-a-valid-mode-for-fopen.html

Description
___________
 
There are several modes when opening a file, as passed with the 2nd argument. Yet, there are values and combinaisons of values thare are not possible.

Example
_______

.. code-block:: php

   <?php
   
   $fp = fopen($path, +rw);
   
   ?>

Solutions
_________

+ 

See Also
________

+ `fopen <https://www.php.net/manual/en/function.fopen.php>`_
