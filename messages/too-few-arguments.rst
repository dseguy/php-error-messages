.. _too-few-arguments:

Too few arguments
-----------------
 
.. meta::
	:description:
		Too few arguments: Functions such as ``printf()`` require at least one argument, the format.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Too few arguments
	:og:description: Functions such as ``printf()`` require at least one argument, the format
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/too-few-arguments.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Too few arguments
	:twitter:description: Too few arguments: Functions such as ``printf()`` require at least one argument, the format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Functions such as ``printf()`` require at least one argument, the format. In that argument, the function will identify and require more arguments, passed after this first one. When there is not enough arguments for the first one, this error appears.

Not that extra arguments are ignored silently by PHP.

This applies to ``printf()``, ``sprintf()``, ``fprintf()``.


Example
_______

.. code-block:: php

   <?php
   
   printf('%s %s', 1);
   
   ?>


Literal Examples
****************
+ printf(): Too few arguments

Solutions
_________

+ Check that the format (first argument), has only the required placeholders ``%s``, ``%i``...
+ Check that the ``printf()`` has enough arguments to match the format.
