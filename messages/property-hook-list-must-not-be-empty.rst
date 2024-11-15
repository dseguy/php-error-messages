.. _property-hook-list-must-not-be-empty:

Property hook list must not be empty
------------------------------------
 
	.. meta::
		:description lang=en:
			Property hook list must not be empty: It is possible to add a block, after a property definition.

Description
___________
 
It is possible to add a block, after a property definition. This is where the ``get`` and ``set`` methods are defined. There can be one or two of these methods, but the block just cannot be left empty.

Example
_______

.. code-block:: php

   <?php
   
   class x {
   	public int $p = 3 {	}
   }
   
   ?>

Solutions
_________

+ Create at least one accessor method in the block.
+ Remove the block.
