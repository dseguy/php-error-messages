.. _the-(real)-cast-is-deprecated,-use-(float)-instead:

The (real) cast is deprecated, use (float) instead
--------------------------------------------------
 
	.. meta::
		:description lang=en:
			The (real) cast is deprecated, use (float) instead: The ``(real)`` cast operator is deprecated in PHP 7.

Description
___________
 
The ``(real)`` cast operator is deprecated in PHP 7.4. It will be completely removed in PHP 8.0. 

Example
_______

.. code-block:: php

   <?php
   
   $float = (real) 1.333;
   
   ?>

Solutions
_________

+ Use ``(float)`` instead.


In more recent PHP versions, this error message is now :ref:`the-(real)-cast-has-been-removed,-use-(float)-instead`.
