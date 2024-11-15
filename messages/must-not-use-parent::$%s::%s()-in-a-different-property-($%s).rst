.. _must-not-use-parent::\$%s::%s()-in-a-different-property-(\$%s):

Must not use parent::$%s::%s() in a different property ($%s)
------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Must not use parent::$%s::%s() in a different property ($%s): Property hooks are actual methods: they can call other methods to fulfill their mission.

Description
___________
 
Property hooks are actual methods: they can call other methods to fulfill their mission. They may also call the parent' methods, and, as such, they may also call the parent's property hook. This has lead to the syntax ``parent::$properpty::get()``.

This syntax is specific to property hooks, and can only be used inside the same property hook for the same property.

Example
_______

.. code-block:: php

   <?php
   
   class x {
       public string $q { 
           get => 'in parent';
       }
   }
   
   class y extends x {
       public string $p { 
           // Must not use parent::$q::get() in a different property ($p)
           get => parent::$q::get();
       }
   }
   
   $y = new y;
   echo $y->q;
   
   ?>

Solutions
_________

+ Move the block of the property hook in a regular method and call it from the hook and other methods.
+ Inline the code every time it is needed.

Related Error Messages
______________________

+ :ref:`must-not-use-parent::$%s::%s()-in-a-different-property-hook-(%s)`
+ :ref:`must-not-use-parent::$%s::%s()-outside-a-property-hook`
