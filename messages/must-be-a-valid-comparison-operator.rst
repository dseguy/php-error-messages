.. _must-be-a-valid-comparison-operator:

must be a valid comparison operator
-----------------------------------
 
	.. meta::
		:description:
			must be a valid comparison operator: version_compare() compares version strings, using an operator, passed as third parameter.

		:og:type: article
		:og:title: must be a valid comparison operator
		:og:description: version_compare() compares version strings, using an operator, passed as third parameter
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-comparison-operator.html

Description
___________
 
version_compare() compares version strings, using an operator, passed as third parameter. Until PHP 8.1, unknown operators are ignored, and use the default value. 

Nowadays, it is generating a fatal error.

Valid operators are : ``<``, ``lt``, ``<=``, ``le``, ``>``, ``gt``, ``>=``, ``ge``, ``==``, ``=``, ``eq``, ``!=``, ``<>``, ``ne``

Note that the 3rd parameter is case sensitive, so ``NE`` also yields the error.


Example
_______

.. code-block:: php

   <?php
   
   version_compare('1.2.4', '1.2.3', '?');
   
   ?>

Solutions
_________

+ Use a valid operator.

Changed Behavior
________________

This error may appear in different PHP versions `version_compare <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/version_compare.html>`_.
