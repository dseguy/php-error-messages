.. _private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes:

Private constant %s::%s cannot be final as it is not visible to other classes
-----------------------------------------------------------------------------
 
	.. meta::
		:description:
			Private constant %s::%s cannot be final as it is not visible to other classes: A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children.

		:og:type: article
		:og:title: Private constant %s::%s cannot be final as it is not visible to other classes
		:og:description: A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/private-constant-%25s%3A%3A%25s-cannot-be-final-as-it-is-not-visible-to-other-classes.html

Description
___________
 
A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children. A ``final`` class constant cannot be overwritten by a child class. 

``private`` and ``final`` a both mutually exclusive.


Example
_______

.. code-block:: php

   <?php
   
   class X {
       private final const A = 1;
   }
   
   ?>


Literal Examples
****************
+ Private constant C::A cannot be final as it is not visible to other classes

Solutions
_________

+ Relax the private keyword with protected, or public.
+ Remove the final keyword.
