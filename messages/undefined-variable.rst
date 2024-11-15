.. _undefined-variable:

Undefined variable
------------------
 
	.. meta::
		:description:
			Undefined variable: This notice is emitted when a variable is being used before being defined.

		:og:type: article
		:og:title: Undefined variable
		:og:description: This notice is emitted when a variable is being used before being defined
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-variable.html

Description
___________
 
This notice is emitted when a variable is being used before being defined. In a word, the variable is not created yet, so PHP creates it on the fly, as NULL, then uses it. 

Example
_______

.. code-block:: php

   <?php
   
   echo $x;
   
   ?>

Solutions
_________

+ Give the variable a default value.

Related Error Messages
______________________

+ :ref:`undefined-array-key`

Changed Behavior
________________

This error may appear in different PHP versions `compactThrowsNotice <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/compactThrowsNotice.html>`_.
