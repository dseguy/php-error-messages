.. _typed-static-property-%s::\$%s-must-not-be-accessed-before-initialization:

Typed static property %s::$%s must not be accessed before initialization
------------------------------------------------------------------------
 
	.. meta::
		:description:
			Typed static property %s::$%s must not be accessed before initialization: Typed static properties are undefined until they are assigned for the first time.

		:og:type: article
		:og:title: Typed static property %s::$%s must not be accessed before initialization
		:og:description: Typed static properties are undefined until they are assigned for the first time
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/typed-static-property-%25s%3A%3A%24%25s-must-not-be-accessed-before-initialization.html

Description
___________
 
Typed static properties are undefined until they are assigned for the first time. Such happens with a default value, or at the first assignation. 

The difference with untyped values, is that PHP emits that error when the property is not typed. On the other hand, an undefined property gets a NULL value instead. 

The coalesce ??, isset() and empty() operators may be used to check if the property exists, even when it is not defined. Be careful to avoid confusing an undefined property and its empty equivalent.


Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public static int $property;
   }
   
   echo x::$property;
   
   ?>


Literal Examples
****************
+ Typed static property x::$p must not be accessed before initialization

Solutions
_________

+ Give a default value to the property.
+ Set the value of the property in the constructor.
+ Use isset(), empty() or ?? to check the status of the property before usage.

Related Error Messages
______________________

+ :ref:`attempt-to-unset-static-property-%s::$%s`
+ :ref:`typed-property-%s::$%s-must-not-be-accessed-before-initialization`
