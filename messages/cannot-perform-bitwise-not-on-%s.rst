.. _cannot-perform-bitwise-not-on-%s:

Cannot perform bitwise not on %s
--------------------------------
 
	.. meta::
		:description:
			Cannot perform bitwise not on %s: Bitwise operations are only available on integers.

		:og:type: article
		:og:title: Cannot perform bitwise not on %s
		:og:description: Bitwise operations are only available on integers
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-perform-bitwise-not-on-%25s.html

Description
___________
 
Bitwise operations are only available on integers. Other types are forbidden. Among the operations ``~`` is a bitwise operation. For the other operators, a different error is emitted.

Example
_______

.. code-block:: php

   <?php
   
   $array = [1,2];
   
   ~$array;
   
   ?>


Literal Examples
****************
+ Cannot perform bitwise not on object
+ Cannot perform bitwise not on boolean
+ Cannot perform bitwise not on resource
+ Cannot perform bitwise not on array

Solutions
_________

+ Use another operator than the bitwise not, such as ``!``.
+ Cast the forbidden type to int before using the bitwise.

Related Error Messages
______________________

+ :ref:`unsupported-operand-types`
