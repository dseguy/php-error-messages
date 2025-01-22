.. _a-non-numeric-value-encountered:

A non-numeric value encountered
-------------------------------
 
.. meta::
	:description:
		A non-numeric value encountered: When the operands have to be integer, PHP tries to cast the value to an integer before perform the operation.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A non-numeric value encountered
	:og:description: When the operands have to be integer, PHP tries to cast the value to an integer before perform the operation
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-non-numeric-value-encountered.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A non-numeric value encountered
	:twitter:description: A non-numeric value encountered: When the operands have to be integer, PHP tries to cast the value to an integer before perform the operation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
When the operands have to be integer, PHP tries to cast the value to an integer before perform the operation. The results varies from impossible to a simple loss of precision. In-between, some of the values cannot be partially converted, and yield this error message. 

Here, the string may be converted to the integer 3, but also will loose some of the non-numeric data 'fd'. PHP warns the user about that partial conversion, in case it doesn't yield the expected results.

When the value cannot be converted to integer due to its type, a fatal error 'Unsupported operand types' is raised.


Example
_______

.. code-block:: php

   <?php
   
   var_dump(3df % 2);
   
   ?>

Solutions
_________

+ Add an explicit cast to integer before usage.
+ Test if the value has an integer value before usage.

Related Error Messages
______________________

+ :ref:`implicit-conversion-from-float-string-"%s"-to-int-loses`
+ :ref:`unsupported-operand-types`
