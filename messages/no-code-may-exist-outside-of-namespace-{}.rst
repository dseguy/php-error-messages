.. _no-code-may-exist-outside-of-namespace-{}:

No code may exist outside of namespace {}
-----------------------------------------
 
	.. meta::
		:description lang=en:
			No code may exist outside of namespace {}: When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks.

Description
___________
 
When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks. Here, the function ``foo()`` is outside the namespace block. 

The error message is not strictly true: the ``declare`` command may be left out of the namespace, and so does any comments.



Example
_______

.. code-block:: php

   <?php
   
   namespace A {
   
   }
   
   function foo() {}
   
   ?>

Solutions
_________

+ Move all the code inside a namespace block.
+ For global namespace, use the ``namespace {...}`` command without a name.
+ Switch to the namespace command without block: all the code will be in that namespace, until the next namespace command.
