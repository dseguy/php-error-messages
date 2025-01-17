.. _must-be-contained-in-argument-#1-(\$haystack):

%s(): Argument #%d ($%s) must be contained in argument #%d ($%s)
----------------------------------------------------------------
 
.. meta::
	:description:
		%s(): Argument #%d ($%s) must be contained in argument #%d ($%s): strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: %s(): Argument #%d ($%s) must be contained in argument #%d ($%s)
		:og:description: strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-contained-in-argument-%231-%28%24haystack%29.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: %s(): Argument #%d ($%s) must be contained in argument #%d ($%s)
		:twitter:description: %s(): Argument #%d ($%s) must be contained in argument #%d ($%s): strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
strpos() searches for a string called ``$needle`` in another string called ``$haystack``, starting at the offset passed as third argument, and called ``$offset``. 

The offset must be smaller than the full length of the ``$haystack``: otherwise, PHP starts to search beyond the end of the data, and that will always fail. 

This error message is shared by several PHP native and extension functions, namely ``mbstring`` and ``iconv``: ``strpos()``, ``strrpos()``, ``stripos()``, ``strripos()``, ``mb_strpos()``, ``mb_strrpos()``, ``mb_stripos()``, ``mb_strripos()``, ``iconv_strpos`` and ``iconv_strrpos``. 

Before PHP 8.0, the failure was reported as a non-blocking warning. Since PHP 8.0, it is a fatal error.


Example
_______

.. code-block:: php

   <?php
   
   var_dump(strpos('abc', 'a', 4));
   
   ?>


Literal Examples
****************
+ strpos(): Argument #3 ($offset) must be contained in argument #1 ($haystack)

Solutions
_________

+ Check that the offset is not beyond the length of the string.
+ Use a try catch around this methodcall.
+ Lengthen the source string.
