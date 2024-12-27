.. _"static::"-is-not-allowed-in-compile-time-constants:

"static::" is not allowed in compile-time constants
---------------------------------------------------
 
	.. meta::
		:description:
			"static::" is not allowed in compile-time constants: The ``static`` keyword is a relative class identifier.

		:og:type: article
		:og:title: &quot;static::&quot; is not allowed in compile-time constants
		:og:description: The ``static`` keyword is a relative class identifier
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/%22static%3A%3A%22-is-not-allowed-in-compile-time-constants.html

Description
___________
 
The ``static`` keyword is a relative class identifier. It is resolved at execution time, depending on which class is calling the expression.

In the case of constants, such as class constants or default values in parameters or properties, they must be known at compile time, to be usable as soon as the application start. 

On the other hand, ``self`` and ``parent`` are valid relative values, as there can only be one. 


Example
_______

.. code-block:: php

   <?php
   
   interface I {
       const C = static::NAME;
   }
   
   class X {
   	public $c = static::name;
       function foo($c = static::NAME) {}
   }
   
   ?>

Solutions
_________

+ Use self::.
+ Set the value dynamically, at execution time.
