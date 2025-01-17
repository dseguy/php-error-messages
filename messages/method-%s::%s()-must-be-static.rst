.. _method-%s::%s()-must-be-static:

Method %s::%s() must be static
------------------------------
 
	.. meta::
		:description:
			Method %s::%s() must be static: The magic method ``__set_state`` must be static.

		:og:type: article
		:og:title: Method %s::%s() must be static
		:og:description: The magic method ``__set_state`` must be static
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-must-be-static.html

Description
___________
 
The magic method ``__set_state`` must be static.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __set_state($state) {}
   }
   ?>

Solutions
_________

+ Add ``static`` to the method ``__set_state`` signature, and remove all ``$this`` in its body.
+ Remove the ``__set_state`` method.
