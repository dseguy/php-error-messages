.. _non-static-method-%s::%s()-cannot-be-called-statically:

Non-static method %s::%s() cannot be called statically
------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Non-static method %s::%s() cannot be called statically: While a non-static method can call a static method, the contrary is not possible.

Description
___________
 
While a non-static method can call a static method, the contrary is not possible. In particular, the non-static method will not be able to have a valid ``$this`` variable, since the static call doesn't provide one. 

Example
_______

.. code-block:: php

   <?php
   
   class x {
       static function foo() {
           self::goo();
       }
       
       function goo() {}
   }
   
   (new x)->foo();
   
   ?>

Solutions
_________

+ Make the concrete method static too.
+ Find an object to call the non-static method.

Related Error Messages
______________________

+ :ref:`non-static-method-%s::%s()-should-not-be-called-statically`
