.. _access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s:

Access level to %s::%s must be %s (as in %s %s)%s
-------------------------------------------------
 
.. meta::
	:description:
		Access level to %s::%s must be %s (as in %s %s)%s: This error is emitted when a class constant is given more restrictive visibility than in the interface.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Access level to %s::%s must be %s (as in %s %s)%s
	:og:description: This error is emitted when a class constant is given more restrictive visibility than in the interface
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/access-level-to-%25s%3A%3A%25s-must-be-%25s-%28as-in-%25s-%25s%29%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Access level to %s::%s must be %s (as in %s %s)%s
	:twitter:description: Access level to %s::%s must be %s (as in %s %s)%s: This error is emitted when a class constant is given more restrictive visibility than in the interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error is emitted when a class constant is given more restrictive visibility than in the interface. 

Anything in an interface is public, and so does any re-declaration in the host class.


Example
_______

.. code-block:: php

   <?php
   
   interface I {
       public const A   = 'public';
   }
   
   class X implements I {
       private const A   = 'public';
   }
   
   ?>


Literal Examples
****************
+ Access level to x::A must be public (as in interface i)
+ Access level to Z::B must be protected (as in class Y)

Solutions
_________

+ Remove the constant from the interface.
+ Remove the constant from the class.
