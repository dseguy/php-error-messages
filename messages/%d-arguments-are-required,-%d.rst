.. _%d-arguments-are-required,-%d:

%d arguments are required, %d given
-----------------------------------
 
.. meta::
	:description:
		%d arguments are required, %d given: The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %d arguments are required, %d given
	:og:description: The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25d-arguments-are-required%2C-%25d.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %d arguments are required, %d given
	:twitter:description: %d arguments are required, %d given: The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument. In the illustration code, there are 4 expected arguments, on top of the first one, and only 2 arguments, including the first one.

This error message is related to the PHP native functions ``printf()``, ``vprintf``, ``sprintf``.

Example
_______

.. code-block:: php

   <?php
   
   printf('%s %s %s %s', $variable);
   
   ?>


Literal Examples
****************
+ 4 arguments are required, 2 given

Solutions
_________

+ Reduce the number of %s in the first argument.
+ Add the missing argument in the function call.
+ Replace the %s by %%s.
