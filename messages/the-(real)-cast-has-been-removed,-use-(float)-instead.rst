.. _the-(real)-cast-has-been-removed,-use-(float)-instead:

The (real) cast operator has been removed, use (float) instead. Both operator looked like synonyms, and were providing the same feature.
----------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		The (real) cast operator has been removed, use (float) instead. Both operator looked like synonyms, and were providing the same feature.: The ``(real)`` cast operator was deprecated in PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The (real) cast operator has been removed, use (float) instead. Both operator looked like synonyms, and were providing the same feature.
	:og:description: The ``(real)`` cast operator was deprecated in PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%28real%29-cast-has-been-removed%2C-use-%28float%29-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The (real) cast operator has been removed, use (float) instead. Both operator looked like synonyms, and were providing the same feature.
	:twitter:description: The (real) cast operator has been removed, use (float) instead. Both operator looked like synonyms, and were providing the same feature.: The ``(real)`` cast operator was deprecated in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
The ``(real)`` cast operator was deprecated in PHP 7.x and is now completely removed. 

Example
_______

.. code-block:: php

   <?php
   
   $float = (real) "1.333";
   
   ?>

Solutions
_________

+ Use ``(float)`` instead.


In previous PHP versions, this error message used to be :ref:`the-(real)-cast-is-deprecated,-use-(float)-instead`.
