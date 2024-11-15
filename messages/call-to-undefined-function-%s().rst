.. _call-to-undefined-function-%s():

Call to undefined function %s()
-------------------------------
 
	.. meta::
		:description:
			Call to undefined function %s(): This error is displayed when the called function is not defined.

		:og:type: article
		:og:title: Call to undefined function %s()
		:og:description: This error is displayed when the called function is not defined
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-%25s%28%29.html

Description
___________
 
This error is displayed when the called function is not defined. 

Example
_______

.. code-block:: php

   <?php
   
   undefined_function();
   
   ?>


Literal Examples
****************
+ Call to undefined function undefined_function()

Solutions
_________

+ The function has not been written in the code.
+ The function has not been included in the code before being called.
+ The function name has a typo.
+ The function is not defined in the current PHP version.
+ The function is not defined in any PHP extension version.
+ The function is not defined the current namespace, or the global namespace.
+ The ``use`` expression, used to import that function from another namespace, misses the ``function`` keyword: ``use foo as A`` instead of ``use function foo as A``.
+ The function is actually a closure: a ``$`` is missing: ``$variable()``, instead of ``variable()``.
+ This is actually a constant, and extra ``()`` were added.
