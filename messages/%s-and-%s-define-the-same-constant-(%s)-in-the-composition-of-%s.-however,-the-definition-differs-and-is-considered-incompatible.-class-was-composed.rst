.. _%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed:

%s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed
----------------------------------------------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			%s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed: There is not conflict resolution, when a class and a trait defined the same constant.

Description
___________
 
There is not conflict resolution, when a class and a trait defined the same constant. Both constants must be identical, or face the above error message. 

In order to be compatible, the constants in the class AND in the trait must have the same name, the same value (after eventual resolution of the expression), same visibility and the same type. 

In the case that the constant is defined in a parent class as ``private``, the trait may defined it again without conflict.


Example
_______

.. code-block:: php

   <?php
   
   class x {
   	private const A = 2;
   }
   
   trait t { 
   	protected const null|int A = 1 + 1;
   	public const null|int B = 1;
   	public const null|int C = 1 + 2;
   }
   
   class y extends x {
   	protected const int B = 2;
   	public const ?int C = 3;
   	
   	use t; 
   }
   ?>

Solutions
_________

+ Synchronise the constants to make them compatible.
+ Remove the constant from the class.
+ Remove the constant from the trait.
