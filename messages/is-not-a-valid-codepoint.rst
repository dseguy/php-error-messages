.. _is-not-a-valid-codepoint:

is not a valid codepoint
------------------------
 
	.. meta::
		:description:
			is not a valid codepoint: Some functions uses integers to represents UTF-8 characters, on top of their string representation.

		:og:type: article
		:og:title: is not a valid codepoint
		:og:description: Some functions uses integers to represents UTF-8 characters, on top of their string representation
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/is-not-a-valid-codepoint.html

Description
___________
 
Some functions uses integers to represents UTF-8 characters, on top of their string representation. When an integer is provided, it has to represent an actual character, in the UTF-8 range. 

In particular, the character cannot be negative, or bigger than 55296.

Example
_______

.. code-block:: php

   <?php
   
   mb_substitute_character(-10);
   
   ?>

Solutions
_________

+ Check for the integer value before using it: it must be between 0 and 55296.
+ Use a string representation, with an escape sequence.
