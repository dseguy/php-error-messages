.. _the-(real)-cast-has-been-removed,-use-(float)-instead:

The (real) cast has been removed, use (float) instead
-----------------------------------------------------
 
	.. meta::
		:description:
			The (real) cast has been removed, use (float) instead: The ``(real)`` cast operator was deprecated in PHP 7.

		:og:type: article
		:og:title: The (real) cast has been removed, use (float) instead
		:og:description: The ``(real)`` cast operator was deprecated in PHP 7
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%28real%29-cast-has-been-removed%2C-use-%28float%29-instead.html

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
