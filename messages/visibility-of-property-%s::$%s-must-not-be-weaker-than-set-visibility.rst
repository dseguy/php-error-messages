.. _visibility-of-property-%s::\$%s-must-not-be-weaker-than-set-visibility:

Visibility of property %s::$%s must not be weaker than set visibility
---------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Visibility of property %s::$%s must not be weaker than set visibility: When using asymmetric visibility, it is not allowed to have a weaker (public) visibility for writing than for reading (private).

Description
___________
 
When using asymmetric visibility, it is not allowed to have a weaker (public) visibility for writing than for reading (private). This would be akin to a variable which can be written from the public scope, which is accessible to the class, but not read from that scope. As such, the set visibility must be at most the same than the get one. 

Using the same level of visibility with both options is possible, although useless. 


Example
_______

.. code-block:: php

   <?php
   
   class x {
      private public(set) string $p;
   
   	// valid but useless
      //protected protected(set) string $p;
   
   	// valid
      public public(set) string $p;
   }
   
   ?>

Solutions
_________

+ Make the property private, and set up an accessor method.
+ Use the magic methods __get and __set to set up that kind of feature.
