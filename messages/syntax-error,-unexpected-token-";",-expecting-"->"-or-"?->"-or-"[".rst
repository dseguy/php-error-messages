.. _syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"[":

syntax error, unexpected token ";", expecting "->" or "?->" or "["
------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting "->" or "?->" or "[": The ``&amp;`` reference operator turns a value into a reference.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;-&gt;&quot; or &quot;?-&gt;&quot; or &quot;[&quot;
	:og:description: The ``&amp;`` reference operator turns a value into a reference
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22-%3E%22-or-%22%3F-%3E%22-or-%22%5B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting "->" or "?->" or "["
	:twitter:description: syntax error, unexpected token ";", expecting "->" or "?->" or "[": The ``&`` reference operator turns a value into a reference
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The ``&`` reference operator turns a value into a reference. It works with data containers, such as variables, properties or array elements. It doesn't work on literal constants. 

The error message suggestion to use extra operators such as ``[`` or ``->`` leads to a distinct error: ``Cannot use temporary expression in write context``.

This error is also raised with a reference on a ``new`` operator. The problem is on the reference operator, but the parser tries to understand more details later in the code before coming back to it.


Example
_______

.. code-block:: php

   <?php
   
   $a = &E_ALL;
   
   const B = [1,2,3];
   //Cannot use temporary expression in write context
   $c = &B[2]; 
   
   // The error is actually on the &
   $x = & new X();
   
   ?>

Solutions
_________

+ Store the constant in a variable, and make the reference on the variable.
+ Use constants by value, not by reference.
+ Remove the reference operator ``&`` before the new call.

Related Error Messages
______________________

+ :ref:`cannot-use-temporary-expression-in-write-context`


In previous PHP versions, this error message used to be :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"{"-or-"["`.
