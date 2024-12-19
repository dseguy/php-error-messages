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

The situation arises when reading a variable, such as the ``echo`` call here. It doesn't happen upon writing, as it is the way to make a variable definition. 

It also happens when using the ``compact`` native function: it collects the values of variables into an array, and emits this error whenever the variable doesn't exist. The entry is also skipped in the result.

The error may be related to a PHP defined variable, which is not available due to version or context. For example, ``$phperrormsg`` was removed in PHP 8.0, and ``$_GET`` is not available in command line context, aka, without a web server.


Example
_______

.. code-block:: php

   <?php
   
   echo $x;
   
   compact('a');
   
   ?>

Solutions
_________

+ Give the variable a default value.
+ Check if the version supports the PHP defined variable.
+ Check if the context supports the variable: web or command line.

Related Error Messages
______________________

+ :ref:`undefined-array-key`

Changed Behavior
________________

This error may appear in different PHP versions `compactThrowsNotice <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/compactThrowsNotice.html>`_.
