.. _cannot-use-the-final-modifier-on-a-property:

Property cannot be both final and private
-----------------------------------------
 
	.. meta::
		:description:
			Property cannot be both final and private: When a property is final, it cannot be overridden in a child class.

		:og:type: article
		:og:title: Property cannot be both final and private
		:og:description: When a property is final, it cannot be overridden in a child class
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-final-modifier-on-a-property.html

Description
___________
 
When a property is final, it cannot be overridden in a child class; when a class is private, it is only available in the current class. 

Hence, a property cannot be final and private at the same time. 

In this situation, the property may not final, as there are no property hooks.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	final private $property;
   }
   
   ?>

Solutions
_________

+ Remove the hooks, and use the magic methods __get/__set.
+ Remove the final keyword.
+ Remove the private keyword and use protected or public.


In previous PHP versions, this error message used to be :ref:`property-cannot-be-both-final-and-private`.
