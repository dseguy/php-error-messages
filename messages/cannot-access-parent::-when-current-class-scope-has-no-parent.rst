.. _cannot-access-parent::-when-current-class-scope-has-no-parent:

Cannot access parent:: when current class scope has no parent
-------------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Cannot access parent:: when current class scope has no parent: The trait X has a property, which is typed with a relative type: ``parent``.

Description
___________
 
The trait X has a property, which is typed with a relative type: ``parent``. Yet, as a trait, there is no parent class possible. 

This situation is solved when the trait is ``use``d in a class, as long as the class has a parent. But it is not possible directly on the trait.

This error is now covered with the upcoming deprecation of direct manipulation of static properties on a trait, without using its host class. 

This error is also possible with ``self``. It is not possible with static, as properties can't be typed static. 

This error is also possible on interfaces. 


Example
_______

.. code-block:: php

   <?php
   
   trait X {
       public static parent $property;
   }
   
   try {
       Test::$property = new stdClass;
   } catch (Error $e) {
       echo $e->getMessage(), \n;
   }
   
   ?>

Solutions
_________

+ Do not use ``parent`` or ``self`` keywords in interfaces. Use an actual class name.
+ Do not use ``parent`` or ``self`` keywords in traits. Use an actual class name.
+ Do not use ``parent`` or ``self`` keywords in enumerations. Use an actual class name.
