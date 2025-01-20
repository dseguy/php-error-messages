.. _type-of-%s::\$%s-must-not-be-defined-(as-in-class-%s):

Type of %s::$%s must not be defined (as in class %s)
----------------------------------------------------
 
.. meta::
	:description:
		Type of %s::$%s must not be defined (as in class %s): Property definitions must be compatible one another, between a parent and a child class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type of %s::$%s must not be defined (as in class %s)
	:og:description: Property definitions must be compatible one another, between a parent and a child class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-of-%25s%3A%3A%24%25s-must-not-be-defined-%28as-in-class-%25s%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type of %s::$%s must not be defined (as in class %s)
	:twitter:description: Type of %s::$%s must not be defined (as in class %s): Property definitions must be compatible one another, between a parent and a child class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Property definitions must be compatible one another, between a parent and a child class. With this error message, the parent class did not define a type for the property, and so, the child class should also not define it. On the other hand, it may change the default value.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public $a;
   }
   
   class Y extends X {
       public array $a;
   }
   
   ?>


Literal Examples
****************
+ Type of Y::$a must not be defined (as in class X)

Solutions
_________

+ Add the type to the parent class, and the sibling classes.
+ Remove the type in the child class.

Related Error Messages
______________________

+ :ref:`type-of-%s::$%s-must-be-%s%s-(as-in-class-%s)`
