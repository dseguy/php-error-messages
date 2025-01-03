.. _must-not-use-parent::\$%s::%s()-in-a-different-property-hook-(%s):

Must not use parent::$%s::%s() in a different property hook (%s)
----------------------------------------------------------------
 
	.. meta::
		:description:
			Must not use parent::$%s::%s() in a different property hook (%s): Property hooks are actual methods: they can call other methods to fulfill their mission.

		:og:type: article
		:og:title: Must not use parent::$%s::%s() in a different property hook (%s)
		:og:description: Property hooks are actual methods: they can call other methods to fulfill their mission
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-not-use-parent%3A%3A%24%25s%3A%3A%25s%28%29-in-a-different-property-hook-%28%25s%29.html

Description
___________
 
Property hooks are actual methods: they can call other methods to fulfill their mission. They may also call the parent' methods, and, as such, they may also call the parent's property hook. This has lead to the syntax ``parent::$properpty::get()``.

This syntax is specific to property hooks, and can only be used inside the same property hook for the same property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public string $q { 
           get => 'in parent';
       }
   }
   
   class Y extends X {
       public string $q { 
           // Must not use parent::$q::get() in a different property hook ($p)
           set => parent::$q::get();
       }
   }
   
   $y = new Y;
   echo $y->q;
   
   ?>


Literal Examples
****************
+ Must not use parent::$q::get() in a different property hook ($p)

Solutions
_________

+ Move the block of the property hook in a regular method and call it from the hook and other methods.
+ Inline the code every time it is needed.

Related Error Messages
______________________

+ :ref:`must-not-use-parent::$%s::%s()-in-a-different-property-($%s)`
+ :ref:`must-not-use-parent::$%s::%s()-outside-a-property-hook`
