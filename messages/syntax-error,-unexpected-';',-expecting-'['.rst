.. _syntax-error,-unexpected-';',-expecting-'[':

syntax error, unexpected ';', expecting '['
-------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected ';', expecting '[': The ``&amp;`` reference operator turns a value into a reference.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: syntax error, unexpected &#039;;&#039;, expecting &#039;[&#039;
		:og:description: The ``&amp;`` reference operator turns a value into a reference
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3B%27%2C-expecting-%27%5B%27.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: syntax error, unexpected ';', expecting '['
		:twitter:description: syntax error, unexpected ';', expecting '[': The ``&`` reference operator turns a value into a reference
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The ``&`` reference operator turns a value into a reference. It works with data containers, such as variables, properties or array elements. It doesn't work on literal constants. 

The error message suggestion to use extra operators such as ``[`` leads to a distinct error: ``Cannot use temporary expression in write context``.

Example
_______

.. code-block:: php

   <?php
   
   $a = &E_ALL;
   
   const B = [1,2,3];
   //Cannot use temporary expression in write context
   $c = &B[2]; 
   
   ?>

Solutions
_________

+ Store the constant in a variable, and make the reference on the variable.
+ Use constants by value, not by reference.

Related Error Messages
______________________

+ :ref:`cannot-use-temporary-expression-in-write-context`


In more recent PHP versions, this error message is now :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"{"-or-"["`.
