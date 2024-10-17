.. _cannot-apply-#[allowdynamicproperties]-to-readonly-class-%s:

Cannot apply #[AllowDynamicProperties] to readonly class %s
-----------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot apply #[AllowDynamicProperties] to readonly class %s: Readonly classes are classes whose properties are set once, and never changed afterwards.

Description
___________
 
Readonly classes are classes whose properties are set once, and never changed afterwards. The readonly option may be added to the individual property, or globally, at the class level. 

Since PHP 8.1, dynamic properties are deprecated. A dynamic property is a property which is used at execution time, aka ``$object->dynamic = 2;``, and has no explicit definition in the class block. Dynamic properties are created, yet they don't have any option, including the ``readonly`` option. In consequence, ``#[AllowDynamicProperties]`` and ``readonly`` at the class level are incompatible.`


Example
_______

.. code-block:: php

   <?php
   
   #[AllowDynamicProperties]
   readonly class x {
   	private $p = 1;
   }
   
   ?>

Solutions
_________

+ Remove ``readonly`` from the class, and add it to all the properties in the class.
+ Create a readonly property with a another class which use the ``#[AllowDynamicProperties]`` attribute.
+ Create a readonly property with an array type, and use it to process the dynamic entries.
+ Remove the ``#[AllowDynamicProperties]`` attribute.
