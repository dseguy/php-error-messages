.. _cannot-use-isset()-on-the-result-of-an-expression-(you-can-use-"null-!==-expression"-instead):

Cannot use isset() on the result of an expression (you can use "null !== expression" instead)
---------------------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot use isset() on the result of an expression (you can use "null !== expression" instead): isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object.

Description
___________
 
isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object. It is not meant to check if an expression is null, because it is not a data container. 

Expressions are valid with isset within a data container, though.

Example
_______

.. code-block:: php

   <?php
   
   $a = 'a';
   $b = 'b';
   if (isset($a . $b)) {}
   
   // recommended by the error itself
   if ($a . $b !== null) {}
   
   // expression are valid with isset within a data container
   if (isset($array[$a . $b])) {}
   if (isset(${$a . $b})) {}
   
   ?>

Solutions
_________

+ Use a comparison to null with an expression.
