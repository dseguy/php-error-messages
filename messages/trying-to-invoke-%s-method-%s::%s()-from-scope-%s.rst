.. _trying-to-invoke-%s-method-%s::%s()-from-scope-%s:

Trying to invoke %s method %s::%s() from scope %s
-------------------------------------------------
 
	.. meta::
		:description:
			Trying to invoke %s method %s::%s() from scope %s: This error reports that the requested method exists, but is not available from the context of call.

		:og:type: article
		:og:title: Trying to invoke %s method %s::%s() from scope %s
		:og:description: This error reports that the requested method exists, but is not available from the context of call
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/trying-to-invoke-%25s-method-%25s%3A%3A%25s%28%29-from-scope-%25s.html

Description
___________
 
This error reports that the requested method exists, but is not available from the context of call. Here, the method is ``protected`` and should only be called from a child class of ``x``. 

There are distinct messages for calling an unknown method, or calling a private method.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       protected function foo() {}
   }
   
   class Y {
       function g() {
           $x = new X;
           $x->foo();
       }
   }
   
   (new Y)->g();
   
   ?>

Solutions
_________

+ Check the name of the method for typo.
+ Check the object of the method is the correct one.

Related Error Messages
______________________

+ :ref:`call-to-undefined-method-%s::%s()`
+ :ref:`call-to-%s-%s::%s()-from-global-scope`
