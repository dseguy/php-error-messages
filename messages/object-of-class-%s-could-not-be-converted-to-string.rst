.. _object-of-class-%s-could-not-be-converted-to-string:

Object of class %s could not be converted to string
---------------------------------------------------
 
.. meta::
	:description:
		Object of class %s could not be converted to string: PHP reports that the object cannot be used as a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Object of class %s could not be converted to string
	:og:description: PHP reports that the object cannot be used as a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/object-of-class-%25s-could-not-be-converted-to-string.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object of class %s could not be converted to string
	:twitter:description: Object of class %s could not be converted to string: PHP reports that the object cannot be used as a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
PHP reports that the object cannot be used as a string. Converting an object into a string is only possible when the magic method ``__toString()`` is implemented, or when the interface ``Stringeable`` is implemented.

In that case, the object is automatically converted into a string, thanks to that method. Otherwise, it is a Fatal error.

This is a distinct error than passing an object in a string argument: in that case, it is a Type error.

A lot of native PHP classes support the conversion, but not all of them. Check for ``stringeable`` interface before using them.


Example
_______

.. code-block:: php

   <?php
   
   class Y { }
   
   //error!
   echo (new Y); 
   
   // X could also be implementing Stringeable, to enforce the __toString() method
   class X {
       function __construct(array $arg) {
           $this->a = $arg;
       }
       
       function __toString(){
           return implode(', ', $this->arg);
       }
   }
   
   // valid
   echo (new X);
   
   $array1 = [E::A];
   $array2 = [E::B];
   enum E: string {
       case A = 'a';
       case B = 'b';
   }
   
   // hidden necessary string conversion
   array_intersect($array1, $array2); // also with other array_intersect* functions
   
   ?>


Literal Examples
****************
+ Object of class Y could not be converted to string
+ Object of class stdClass could not be converted to string

Solutions
_________

+ Implement the ``Stringeable`` interface on the class, or its parent.
+ Implement the ``__toString`` method n the class, or its parent.
+ Call a method that returns a string, on that object.
+ Use ``print_r`` or ``var_dump`` to get the details inside the object.

Related Error Messages
______________________

+ :ref:`object-of-class-%s-could-not-be-converted-to-bool`
+ :ref:`object-of-class-%s-could-not-be-converted-to-int`
+ :ref:`object-of-class-%s-could-not-be-converted-to-float`

See Also
________

+ `4 Solutions For Object of class stdclass could not be converted to string error <https://agethemes.com/object-of-class-stdclass-could-not-be-converted-to-string/>`_
