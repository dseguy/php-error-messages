.. _call-to-%s-%s::%s()-from-global-scope:

Call to %s %s::%s() from global scope
-------------------------------------
 
	.. meta::
		:description lang=en:
			Call to %s %s::%s() from global scope: This error reports that the requested method exists, but is not available from the context of call.

Description
___________
 
This error reports that the requested method exists, but is not available from the context of call. Here, the method is ``private`` and should only be called from within its definition class. 

There are distinct messages for calling an unknown method, or calling a protected method.

Example
_______

.. code-block:: php

   <?php
   
   class x {
       public function foo() {}
       private function goo() {}
   }
   
   $x = new x;
   $x->goo();
   
   ?>


Literal Examples
****************
+ Call to private x::goo() from global scope

Solutions
_________

+ Call a public method on that class.
+ Check for typos in the name of the method.
+ Change the visibility of the method, to be able to call it.

Related Error Messages
______________________

+ :ref:`call-to-undefined-method-%s::%s()`
+ :ref:`trying-to-invoke-%s-method-%s::%s()-from-scope-%s`
