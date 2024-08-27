.. _interface-%s-cannot-contain-non-abstract-method-%s():

Interface %s cannot contain non abstract method %s()
----------------------------------------------------
 
	.. meta::
		:description lang=en:
			Interface %s cannot contain non abstract method %s(): In an interface, there can only be methods signature, and no method body.

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
   
   interface i  {
   	function foo() {}
   	
   	function bar() ;
   }
   
   abstract class ci  {
   	function foo() {}
   	
   	abstract function bar() ;
   }
   
   ?>

Solutions
_________

+ Remove all bodies in an interface's method.
+ Turn the interface into an abstract class.
+ Move the concrete class to a trait, and use the trait, along with the interface.
