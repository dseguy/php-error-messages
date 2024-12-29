.. _property-hook-list-must-not-be-empty:

Property hook list must not be empty
------------------------------------
 
	.. meta::
		:description:
			Property hook list must not be empty: It is possible to add a block, after a property definition.

		:og:type: article
		:og:title: Property hook list must not be empty
		:og:description: It is possible to add a block, after a property definition
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-hook-list-must-not-be-empty.html

Description
___________
 
It is possible to add a block, after a property definition. This is where the ``get`` and ``set`` methods are defined. There can be one or two of these methods, but the block just cannot be left empty.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public int $p = 3 {	}
   }
   
   ?>

Solutions
_________

+ Create at least one accessor method in the block.
+ Remove the block.
