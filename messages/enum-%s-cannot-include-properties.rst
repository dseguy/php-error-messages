.. _enum-%s-cannot-include-properties:

Enum %s cannot include properties
---------------------------------
 
	.. meta::
		:description:
			Enum %s cannot include properties: Enumeration cannot define a property.

		:og:type: article
		:og:title: Enum %s cannot include properties
		:og:description: Enumeration cannot define a property
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-%25s-cannot-include-properties.html

Description
___________
 
Enumeration cannot define a property. They can only define constants and methods. 

Enum can use a trait, and import several methods. Traits can also define properties, which are mixed with the host. On the other hand, enum cannot define properties: when a trait is used by an enumeration, it should not have any properties. It is also the case for traits of traits. 

Example
_______

.. code-block:: php

   <?php
   
   enum d {
      private $p = 1;
   }
   
   trait t {
      private int $property; 
   }
   
   enum e {
       use t;
   }
   
   ?>

Solutions
_________

+ Remove the property from the trait.
+ Split the trait in two traits, and include the new trait that has no property.
