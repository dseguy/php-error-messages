.. _could-not-find-trait-%s:

Could not find trait %s
-----------------------
 
	.. meta::
		:description lang=en:
			Could not find trait %s: A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP.

Description
___________
 
A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP. 

The trait may be included in a different use expression. Then, it generates a distinct error message. 

Note that when the trait exists and is known to PHP, there is a distinct error message.

Example
_______

.. code-block:: php

   <?php
   trait A {
       public function foo(){}
   }
   
   class B {
       use A {
           C::foo as tf;
       }
   }
   
   ?>

Solutions
_________

+ Remove the expression that mentions the non-existing trait.
+ Create the missing trait.
+ Add the trait to the class.
