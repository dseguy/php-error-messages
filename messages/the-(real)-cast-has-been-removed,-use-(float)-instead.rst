.. _the-(real)-cast-has-been-removed,-use-(float)-instead:

The (real) cast has been removed, use (float) instead
-----------------------------------------------------
 
	.. meta::
		:description lang=en:
			The (real) cast has been removed, use (float) instead: The ``(real)`` cast operator was deprecated in PHP 7.

Description
___________
 
The ``(real)`` cast operator was deprecated in PHP 7.x and is now completely removed. 

Example
_______

.. code-block:: php

   <?php
   
   $float = (real) 1.333;
   
   ?>

Solutions
_________

+ Use ``(float)`` instead.


In previous PHP versions, this error message used to be :ref:`the-(real)-cast-is-deprecated,-use-(float)-instead`.
