.. _b-cannot-implement-a---it-is-not-an-interface:

b cannot implement a - it is not an interface
---------------------------------------------
 
	.. meta::
		:description:
			b cannot implement a - it is not an interface: implements is a keyword that only applies to interfaces.

		:og:type: article
		:og:title: b cannot implement a - it is not an interface
		:og:description: implements is a keyword that only applies to interfaces
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/b-cannot-implement-a---it-is-not-an-interface.html

Description
___________
 
implements is a keyword that only applies to interfaces. Classes, traits and enum are all triggering this message.

The error message also applies with the extends keyword, when building an inteface.


Example
_______

.. code-block:: php

   <?php
   
   class a {}
   
   class b implements a {}
   
   interface b extends a {}
   
   ?>

Solutions
_________

+ Use an interface instead of a class.
+ Convert the class to an interface, then implements this interface.
+ Change the implemented or extended class to an actual interface.
