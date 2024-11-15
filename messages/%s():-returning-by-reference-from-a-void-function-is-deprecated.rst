.. _%s():-returning-by-reference-from-a-void-function-is-deprecated:

%s(): Returning by reference from a void function is deprecated
---------------------------------------------------------------
 
	.. meta::
		:description:
			%s(): Returning by reference from a void function is deprecated: The void type means that the function is not returning anything.

		:og:type: article
		:og:title: %s(): Returning by reference from a void function is deprecated
		:og:description: The void type means that the function is not returning anything
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-returning-by-reference-from-a-void-function-is-deprecated.html

Description
___________
 
The void type means that the function is not returning anything. So, it doesn't matter if that nothing is returned by value or by reference.

If the returned value is, nontheless, collected, it will be null in any case. 

Example
_______

.. code-block:: php

   <?php
   
   function &foo(): void { }
   ?>


Literal Examples
****************
+ foo(): Returning by reference from a void function is deprecated

Solutions
_________

+ Remove the reference of the function.
+ Remove the type void, and return an actual value.
