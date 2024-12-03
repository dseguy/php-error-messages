.. _declaration-of-%s-must-be-compatible-with-%s:

Declaration of %s must be compatible with %s
--------------------------------------------
 
	.. meta::
		:description:
			Declaration of %s must be compatible with %s: Classes methods signature have to be compatible between a parent class and a child class.

		:og:type: article
		:og:title: Declaration of %s must be compatible with %s
		:og:description: Classes methods signature have to be compatible between a parent class and a child class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s-must-be-compatible-with-%25s.html

Description
___________
 
Classes methods signature have to be compatible between a parent class and a child class. When the signatures are different, the caller has to figure out which object is being used, and how to call the method. Hence, PHP checks that methods are compatible. 

Method signature compatibility applies to all methods, except for ``__construct``, which may have completely different signatures one from another.

The error message requires ``compatible`` signatures, which means that some variations are possible, and others are not. 

Authorized variations

+ Add a new parameter, with a default value 
+ Make the returntype more general than the parent
+ Make the parameter types stricter than the parent
+ Add elements to a union type of a parameter
+ Change the default value 
+ Change the names of the parameters (not recommended)
+ Make the visibility stricter 

Forbidden variations

+ Add or remove a parameter
+ Add or remove a default value
+ Add or remove a parameter type
+ Add or remove the return type
+ Add or remove the reference option
+ Add or remove the variadic option
+ Add or remove the static option



Example
_______

.. code-block:: php

   <?php
   
   class x {
       function foo($a) {}
       
   }
   
   class y extends x {
       function foo() {}
       
   }
   ?>


Literal Examples
****************
+ Declaration of x::foo() must be compatible with y::foo()

Solutions
_________

+ Check the variations and fix them.
+ Change the name of the method to a free one.
