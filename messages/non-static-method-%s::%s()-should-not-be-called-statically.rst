.. _non-static-method-%s::%s()-should-not-be-called-statically:

Non-static method %s::%s() should not be called statically
----------------------------------------------------------
 
.. meta::
	:description:
		Non-static method %s::%s() should not be called statically: A non-static method requires an object to be called, as PHP will populate that object in the ``$this`` method.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Non-static method %s::%s() should not be called statically
		:og:description: A non-static method requires an object to be called, as PHP will populate that object in the ``$this`` method
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-static-method-%25s%3A%3A%25s%28%29-should-not-be-called-statically.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Non-static method %s::%s() should not be called statically
		:twitter:description: Non-static method %s::%s() should not be called statically: A non-static method requires an object to be called, as PHP will populate that object in the ``$this`` method
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
A non-static method requires an object to be called, as PHP will populate that object in the ``$this`` method. 

If the method makes no use of ``$this``, make it static to allow the call. Otherwise, keep it non-static, and use an object for the call.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo() { echo __METHOD__;}
   }
   
   X::foo();
   
   ?>


Literal Examples
****************
+ Non-static method x::foo() should not be called statically

Solutions
_________

+ Make the method static.
+ Find an object to call the method.

Related Error Messages
______________________

+ :ref:`non-static-method-%s::%s()-cannot-be-called-statically`
