.. _syntax-error,-unexpected-token-":":

syntax error, unexpected token ":"
----------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected token ":": A syntax error is a generic error, where PHP could not compile the code.

		:og:type: article
		:og:title: syntax error, unexpected token &quot;:&quot;
		:og:description: A syntax error is a generic error, where PHP could not compile the code
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%22.html

Description
___________
 
A syntax error is a generic error, where PHP could not compile the code. Here are some classic typo or seemingly valid code that leads to this error.

+ Since PHP 8.0, named parameters may be used, though parameters don't use the initial ``$`` sign.



Example
_______

.. code-block:: php

   <?php
   
   // calling a named parameter, with the $ in the parameter name
   foo($c: 1);
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Fix the name of the parameter.
