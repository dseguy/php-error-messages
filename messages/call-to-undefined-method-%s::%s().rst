.. _call-to-undefined-method-%s::%s():

Call to undefined method %s::%s()
---------------------------------
 
	.. meta::
		:description:
			Call to undefined method %s::%s(): This message is emitted when no method with the requested name could be found on the class, or its parents or traits.

		:og:type: article
		:og:title: Call to undefined method %s::%s()
		:og:description: This message is emitted when no method with the requested name could be found on the class, or its parents or traits
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-method-%25s%3A%3A%25s%28%29.html

Description
___________
 
This message is emitted when no method with the requested name could be found on the class, or its parents or traits.

Calling from another class's context yields a distinct message.


Example
_______

.. code-block:: php

   <?php
   
   class x {
       function foo() {}
   }
   
   $x = new x;
   $x->goo();
   
   ?>


Literal Examples
****************
+ Call to undefined method x::goo()

Solutions
_________

+ Check the spelling of the method name.
+ Check if the object supports this method.
+ Check if there are the valid trait name import (``use`` in a class), to define the method.
+ Check if the method is still available in the current setup (PHP version, components and library versions...).
+ Check if the magic method ``__call()`` is not missing in the object's class.

Related Error Messages
______________________

+ :ref:`trying-to-invoke-%s-method-%s::%s()-from-scope-%s`
+ :ref:`call-to-%s-%s::%s()-from-global-scope`
