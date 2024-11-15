.. _only-variable-references-should-be-yielded-by-reference:

Only variable references should be yielded by reference
-------------------------------------------------------
 
	.. meta::
		:description:
			Only variable references should be yielded by reference: With the ``&amp;`` option in the signature, a generator is yielding values by reference, and not by value.

		:og:type: article
		:og:title: Only variable references should be yielded by reference
		:og:description: With the ``&amp;`` option in the signature, a generator is yielding values by reference, and not by value
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-variable-references-should-be-yielded-by-reference.html

Description
___________
 
With the ``&`` option in the signature, a generator is yielding values by reference, and not by value. This way, literal values cannot be yielded: they must be stored in a variable or property first.

Example
_______

.. code-block:: php

   <?php
   
   function &gen() {
       yield foo;
   }
   
   $gen = gen();
   var_dump($gen->current());
   
   ?>

Solutions
_________

+ Store the literal in a variable and yield the variable.
+ Remove the & in the method signature.
