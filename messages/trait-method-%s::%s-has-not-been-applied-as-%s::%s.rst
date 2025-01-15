.. _trait-method-%s::%s-has-not-been-applied-as-%s::%s:

Trait method %s::%s has not been applied as %s::%s
--------------------------------------------------
 
	.. meta::
		:description:
			Trait method %s::%s has not been applied as %s::%s: Two methods with the same name were imported with two distinct traits: PHP could not decide which one to use.

		:og:type: article
		:og:title: Trait method %s::%s has not been applied as %s::%s
		:og:description: Two methods with the same name were imported with two distinct traits: PHP could not decide which one to use
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/trait-method-%25s%3A%3A%25s-has-not-been-applied-as-%25s%3A%3A%25s.html

Description
___________
 
Two methods with the same name were imported with two distinct traits: PHP could not decide which one to use.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
       public function foo() { return 3; }
   }
   trait U {
       public function foo() { return 2; }
   }
   
   class Bar {
       use T, U;
   }
   
   $x = new Bar();
   var_dump($x->foo());
   
   ?>


Literal Examples
****************
+ Trait method U::foo has not been applied as Bar::foo, because of collision with T::foo

Solutions
_________

+ Change the name of the method in one of the trait.
+ Add aliasing when importing the traits.
+ Only use one of the trait.
+ Make one trait use the other one.
