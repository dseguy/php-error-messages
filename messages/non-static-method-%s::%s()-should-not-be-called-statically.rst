.. _non-static-method-%s::%s()-should-not-be-called-statically:

Non-static method %s::%s() should not be called statically
----------------------------------------------------------
 
	.. meta::
		:description lang=en:
			Non-static method %s::%s() should not be called statically: A non-static method requires an object to be called, as PHP will populate that object in the ``$this`` method.

Description
___________
 
A non-static method requires an object to be called, as PHP will populate that object in the ``$this`` method. 

If the method makes no use of ``$this``, make it static to allow the call. Otherwise, keep it non-static, and use an object for the call.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	function foo() { echo __METHOD__;}
   }
   
   x::foo();
   
   ?>

Solutions
_________

+ Make the method static.
+ Find an object to call the method.

Related Error Messages
______________________

+ :ref:`non-static-method-%s::%s()-cannot-be-called-statically`
