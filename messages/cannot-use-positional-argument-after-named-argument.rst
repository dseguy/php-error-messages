.. _cannot-use-positional-argument-after-named-argument:

Cannot use positional argument after named argument
---------------------------------------------------
 
	.. meta::
		:description:
			Cannot use positional argument after named argument: When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument.

		:og:type: article
		:og:title: Cannot use positional argument after named argument
		:og:description: When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-positional-argument-after-named-argument.html

Description
___________
 
When using a mix of array unpacking and arguments, it is not possible to put the arguments after the unpacked argument. Said another way, the unpacked arguments must be the last one in the list. 

Example
_______

.. code-block:: php

   <?php
   
   // Valid, the unpacked argument is the last
   foo($a, $b, ...$c);
   
   // Also valid, the unpacked arguments are the last
   foo($a, $b, ...$c, ...$d);
   
   // Not valida
   foo(...$a, $b, ...$c);
   
   ?>

Solutions
_________

+ Write the positional argument before the named ones in the call.

Related Error Messages
______________________

+ :ref:`cannot-use-empty-list`
+ :ref:`named-parameter-$x-overwrites-previous-argument`
