.. _namespace-declarations-cannot-be-nested:

Namespace declarations cannot be nested
---------------------------------------
 
	.. meta::
		:description lang=en:
			Namespace declarations cannot be nested: Namespace declaration, with blocks, cannot be nested one into the other.

Description
___________
 
Namespace declaration, with blocks, cannot be nested one into the other. Namespaces must be one next to each other. 

Usually, there is only one namespace per file, without a block.


Example
_______

.. code-block:: php

   <?php
   
   namespace A {
       namespace B {
       
       }
   }
   
   ?>

Solutions
_________

+ Make the namespaces next to each other; concatenate the names to create deep namespaces: ``namespace A\B {..}``.
+ Split the code into several files, each with only one namespace.
