.. _case-%s::%s-does-not-exist:

Case %s::%s does not exist
--------------------------
 
	.. meta::
		:description:
			Case %s::%s does not exist: This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case.

		:og:type: article
		:og:title: Case %s::%s does not exist
		:og:description: This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/case-%25s%3A%3A%25s-does-not-exist.html

Description
___________
 
This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case.

Example
_______

.. code-block:: php

   <?php
   
   enum E {
       case a;
   }
   
   $reflectionEnum = new ReflectionEnum(E::class);
   $reflectionEnum->getCase('b');
   
   
   ?>


Literal Examples
****************
+ Case E::b does not exist

Solutions
_________

+ Make sure the case exists before trying to instantiate its relate object.
