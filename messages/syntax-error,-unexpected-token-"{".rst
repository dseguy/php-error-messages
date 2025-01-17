.. _syntax-error,-unexpected-token-"{":

syntax error, unexpected token "{"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "{": A syntax error is a generic error, where PHP could not compile the code.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected token &quot;{&quot;
		:og:description: A syntax error is a generic error, where PHP could not compile the code
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%7B%22.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: syntax error, unexpected token "{"
		:twitter:description: syntax error, unexpected token "{": A syntax error is a generic error, where PHP could not compile the code
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A syntax error is a generic error, where PHP could not compile the code. Here are some classic typo or seemingly valid code that leads to this error.

+ Since PHP 8.4, array syntax with curly braces are not valid anymore. It used to yield a warning, and it is now totally abandoned.
+ A missing closing parenthesis in a crowded parenthesis space, leads to an error in the next block



Example
_______

.. code-block:: php

   <?php
   
   $a{1} = 2;
   
   if (in_array(1, [2, 4]) {}
   
   
   ?>

Solutions
_________

+ Move to the square bracked array syntax only.
+ Add the missing closing parenthesis to the if() statement.
