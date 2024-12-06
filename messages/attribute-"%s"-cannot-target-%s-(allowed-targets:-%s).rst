.. _attribute-"%s"-cannot-target-%s-(allowed-targets:-%s):

Attribute "%s" cannot target %s (allowed targets: %s)
-----------------------------------------------------
 
	.. meta::
		:description:
			Attribute "%s" cannot target %s (allowed targets: %s): Attributes are built with a specific target, and may not be applicable to any structure.

		:og:type: article
		:og:title: Attribute &quot;%s&quot; cannot target %s (allowed targets: %s)
		:og:description: Attributes are built with a specific target, and may not be applicable to any structure
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/attribute-%5C%22%25s%5C%22-cannot-target-%25s-%28allowed-targets%3A-%25s%29.html

Description
___________
 
Attributes are built with a specific target, and may not be applicable to any structure. For example, the native ``ReturnTypeWillChange`` targets only methods, and not properties.

With a custom structure, the error is shown when requesting an instance of the attribute. Otherwise, this error remains silent, and the structure may be used without error.

With a PHP native attribute, the engine decides when it makes use of it. 


Example
_______

.. code-block:: php

   <?php
   
   // example with a native PHP attribute
   class Foo
   {
       #[ReturnTypeWillChange]
       public int $bar;
   }
   
   #[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD)]
   class X { }
   
   // new object created: it may be used without error.
   $ref = new ReflectionObject(new #[X] class() { });
   $attr = $ref->getAttributes()[0];
   
   try {
       $attr->newInstance();
   } catch (\Throwable $e) {
       print $e->getMessage();
   }
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Remove the attribute restrictions.
+ Update the attribute to target the requested feature.
+ Remove the attribute from the forbidden feature.
+ Create another the attribute for the feature.
