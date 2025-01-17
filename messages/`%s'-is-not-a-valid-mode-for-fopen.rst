.. _`%s'-is-not-a-valid-mode-for-fopen:

`%s' is not a valid mode for fopen
----------------------------------
 
	.. meta::
		:description:
			`%s' is not a valid mode for fopen: There are several modes when opening a file, as passed with the 2nd argument.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: `%s&#039; is not a valid mode for fopen
		:og:description: There are several modes when opening a file, as passed with the 2nd argument
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%60%25s%27-is-not-a-valid-mode-for-fopen.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: `%s' is not a valid mode for fopen
	:twitter:description: `%s' is not a valid mode for fopen: There are several modes when opening a file, as passed with the 2nd argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
There are several modes when opening a file, as passed with the 2nd argument. Yet, there are values and combinaisons of values thare are not possible.

Example
_______

.. code-block:: php

   <?php
   
   $fp = fopen($path, "+rw");
   
   ?>


Literal Examples
****************
+ `+rw' is not a valid mode for fopen

Solutions
_________

+ Use a valid open mode.

See Also
________

+ `fopen <https://www.php.net/manual/en/function.fopen.php>`_
