.. _trying-to-invoke-%s-method-%s::%s()-from-scope-%s:

Trying to invoke %s method %s::%s() from scope %s
-------------------------------------------------
 
	.. meta::
		:description lang=en:
			Trying to invoke %s method %s::%s() from scope %s: This error reports that the requested method exists, but is not available from the context of call.

Description
___________
 
This error reports that the requested method exists, but is not available from the context of call. Here, the method is ``protected`` and should only be called from a child class of ``x``. 

There are distinct messages for calling an unknown method, or calling a private method.

Example
_______

.. code-block:: php

   <?php
   
   class x {
       protected function foo() {}
   }
   
   class y {
       function g() {
           $x = new x;
           $x->foo();
       }
   }
   
   (new y)->g();
   
   ?>


Literal Examples
****************
+ 

Solutions
_________

+ Check the name of the method for typo.
+ Check the object of the method is the correct one.

Related Error Messages
______________________

+ :ref:`call-to-undefined-method-%s::%s()`
+ :ref:`call-to-%s-%s::%s()-from-global-scope`
