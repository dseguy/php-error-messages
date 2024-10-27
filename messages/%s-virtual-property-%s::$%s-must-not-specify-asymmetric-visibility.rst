.. _%s-virtual-property-%s::$%s-must-not-specify-asymmetric-visibility:

%s virtual property %s::$%s must not specify asymmetric visibility
------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			%s virtual property %s::$%s must not specify asymmetric visibility: A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none).

Description
___________
 
A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none). 

When the set or get visibility doesn't apply, this error is displayed. The error message may start with ``Read-only`` or ``Write-only``.



Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public private(set) int $p {
   		set {}
   	}
   }
   
   ?>

Solutions
_________

+ Remove the asymmetric visibility from the definition of the property.
+ Remove the property hook from the definition of the property.
+ Remove the virtual property, by making the property hook use the underlying property.
