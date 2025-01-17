.. _interface-%s-cannot-contain-non-abstract-method-%s():

Interface %s cannot contain non abstract method %s()
----------------------------------------------------
 
.. meta::
	:description:
		Interface %s cannot contain non abstract method %s(): In an interface, there can only be methods signature, and no method body.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Interface %s cannot contain non abstract method %s()
	:og:description: In an interface, there can only be methods signature, and no method body
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/interface-%25s-cannot-contain-non-abstract-method-%25s%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface %s cannot contain non abstract method %s()
	:twitter:description: Interface %s cannot contain non abstract method %s(): In an interface, there can only be methods signature, and no method body
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
In an interface, there can only be methods signature, and no method body. Aka, this means only the semi-colon after the method signature, et no body block.

Methods in an interface are considered abstract by default. There is no need to add such explicit option, nor is it even legal to use it there.

Hence, in an interface, there are only abstract methods: methods without a body. The abstract keyword is implicit in an interface; When the interface is partially implemented by a class, the remaining methods must be declared abstract in that class. 

If some methods have to be made concrete (aka, not abstract), it is possible to create an abstract class, with a mix of abstract and concrete methods, which can then be extended by the target class.


Example
_______

.. code-block:: php

   <?php
   
   interface I {
   	function foo() {}
   	
   	function bar() ;
   }
   
   abstract class CI  {
   	function foo() {}
   	
   	abstract function bar() ;
   }
   
   ?>


Literal Examples
****************
+ Interface I cannot contain non abstract method foo()

Solutions
_________

+ Remove all bodies in an interface's method.
+ Turn the interface into an abstract class.
+ Move the concrete class to a trait, and use the trait, along with the interface.
