.. _cannot-declare-variadic-promoted-property:

Cannot declare variadic promoted property
-----------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot declare variadic promoted property: Properties may be declared, as an parameter in a constructor.

Description
___________
 
Properties may be declared, as an parameter in a constructor. Then, they also act as an parameter, and a local variable.

Variadic option is a parameter only option, which pack all the remaning arguments in the final parameter. 

Variadic option makes no sense in a property definition, as only one value is stored there.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function __construct(
   		private string ...$x
   	) {}
   }
   
   ?>

Solutions
_________

+ Remove the property definition from the constructor: keep the argument use the variadic, and define the property in the traditional way.
+ Remove the variadic option.
