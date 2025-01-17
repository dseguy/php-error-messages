.. _%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed:

%s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed
----------------------------------------------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			%s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed: There is not conflict resolution, when a class and a trait defined the same constant.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: %s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed
		:og:description: There is not conflict resolution, when a class and a trait defined the same constant
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-and-%25s-define-the-same-constant-%28%25s%29-in-the-composition-of-%25s.-however%2C-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed
	:twitter:description: %s and %s define the same constant (%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed: There is not conflict resolution, when a class and a trait defined the same constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
There is not conflict resolution, when a class and a trait defined the same constant. Both constants must be identical, or face the above error message. 

In order to be compatible, the constants in the class AND in the trait must have the same name, the same value (after eventual resolution of the expression), same visibility and the same type. 

In the case that the constant is defined in a parent class as ``private``, the trait may defined it again without conflict.


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private const A = 2;
   }
   
   trait T { 
   	protected const null|int A = 1 + 1;
   	public const null|int B = 1;
   	public const null|int C = 1 + 2;
   }
   
   class Y extends X {
   	protected const int B = 2;
   	public const ?int C = 3;
   	
   	use T; 
   }
   ?>


Literal Examples
****************
+ y and t define the same constant (B) in the composition of y. However, the definition differs and is considered incompatible. Class was composed

Solutions
_________

+ Synchronise the constants to make them compatible.
+ Remove the constant from the class.
+ Remove the constant from the trait.
