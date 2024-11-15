.. _property-%s::\$%s-cannot-have-type-%s:

Property %s::$%s cannot have type %s
------------------------------------
 
	.. meta::
		:description:
			Property %s::$%s cannot have type %s: Some native PHP types are not allowed with a property.

		:og:type: article
		:og:title: Property %s::$%s cannot have type %s
		:og:description: Some native PHP types are not allowed with a property
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-%25s%3A%3A%24%25s-cannot-have-type-%25s.html

Description
___________
 
Some native PHP types are not allowed with a property. This is the case of void, never and callable. Any mention of them, alone or in a compsed type generates this error. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public callable|int $p = 1;
   }
   
   ?>

Solutions
_________

+ Remove any illegal type from the definition of the property.
+ Remove all types from the definition of the property.

Related Error Messages
______________________

+ :ref:`class-constant-%s::%s-cannot-have-type-%s`
