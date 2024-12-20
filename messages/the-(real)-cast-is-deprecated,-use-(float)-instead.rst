.. _the-(real)-cast-is-deprecated,-use-(float)-instead:

The (real) cast is deprecated, use (float) instead
--------------------------------------------------
 
	.. meta::
		:description:
			The (real) cast is deprecated, use (float) instead: The ``(real)`` cast operator is deprecated in PHP 7.

		:og:type: article
		:og:title: The (real) cast is deprecated, use (float) instead
		:og:description: The ``(real)`` cast operator is deprecated in PHP 7
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%28real%29-cast-is-deprecated%2C-use-%28float%29-instead.html

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
