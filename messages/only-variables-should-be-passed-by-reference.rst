.. _only-variables-should-be-passed-by-reference:

Only variables should be passed by reference
--------------------------------------------
 
	.. meta::
		:description:
			Only variables should be passed by reference: Methods arguments may be passed by value or by reference.

		:og:type: article
		:og:title: Only variables should be passed by reference
		:og:description: Methods arguments may be passed by value or by reference
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-variables-should-be-passed-by-reference.html

Description
___________
 
Methods arguments may be passed by value or by reference. The first one is the default behavior, and the second one is optional: it is identified with the ``&``, before the name of the argument.

When an argument is passed by reference, the calling context passes a variable, and conserves a handle to the modified variable after the execution of the method. The handle points to a data container, such as a variable, a property, a static property or a array item. 

When passing literal values or constants, global or class, a distinct error is emitted, as there cannot be a reference to them. They can only be passed by value.

This error message is emitted when a value is returned, and feed into a reference argument. 


Example
_______

.. code-block:: php

   <?php
   
   function foo(int &$int) {
       // doSomething
   }
   
   foo(abs(-3));
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Store the value in a variable, and pass the variable to the method.
+ Remove the reference from the called method signature.
