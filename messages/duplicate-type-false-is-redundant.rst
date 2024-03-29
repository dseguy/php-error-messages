.. _duplicate-type-false-is-redundant:

Duplicate type false is redundant
---------------------------------
 
	.. meta::
		:description lang=en:
			Duplicate type false is redundant: When declaring a complex type, each part of the type must be unique.

Description
___________
 
When declaring a complex type, each part of the type must be unique. This means that a type can only be mentionned once.

This constraint is actually easier to explain than to detail: of course, it is important to avoid repeating the same type, yet types may be declared with different case, with or without initial slash, with a local alias, or also with a class_alias(). 

Then, there is also the possiblity for the type to be part of a composed type, such as bool (which is true|false), or mixed, or iterable, etc. 


Example
_______

.. code-block:: php

   <?php
   
   function foo() : A|a|\a|\A {}
   
   function goo() : bool|false {}
   
   ?>

Solutions
_________

+ Remove types that are double.
+ Remove the types.
