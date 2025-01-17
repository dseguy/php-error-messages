.. _is-not-a-valid-codepoint:

is not a valid codepoint
------------------------
 
.. meta::
	:description:
		is not a valid codepoint: Some functions uses integers to represents UTF-8 characters, on top of their string representation.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: is not a valid codepoint
		:og:description: Some functions uses integers to represents UTF-8 characters, on top of their string representation
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/is-not-a-valid-codepoint.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: is not a valid codepoint
		:twitter:description: is not a valid codepoint: Some functions uses integers to represents UTF-8 characters, on top of their string representation
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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
