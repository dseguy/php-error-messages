.. _cannot-declare-promoted-property-in-an-abstract-constructor:

Cannot declare promoted property in an abstract constructor
-----------------------------------------------------------
 
.. meta::
	:description:
		Cannot declare promoted property in an abstract constructor: It is not possible to use a promoted property in an abstract constructor.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare promoted property in an abstract constructor
	:og:description: It is not possible to use a promoted property in an abstract constructor
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-promoted-property-in-an-abstract-constructor.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare promoted property in an abstract constructor
	:twitter:description: Cannot declare promoted property in an abstract constructor: It is not possible to use a promoted property in an abstract constructor
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
It is not possible to use a promoted property in an abstract constructor. The promoted property is akin to concrete code (the property assignation), while the abstrat constructor has no body. 

On the other hand, a child class may overwrite the constructor signature with a promoted property, so it is possible to define properties that way, but not on an abstract method.

In order to enforce a property, from an abstract class, the property must be defined out of the constructor.


Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
   	abstract function __construct(private string $a);
   }
   
   ?>

Solutions
_________

+ Remove the abstract from the constructor.
+ Define the property outside the construtor.
+ Check all children classes, so they all have the promoted property in their constructor definition.
