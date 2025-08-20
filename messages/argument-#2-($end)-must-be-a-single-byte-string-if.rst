.. _argument-#2-(\$end)-must-be-a-single-byte-string-if:

range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0
---------------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0: When range() produces all the values between two boundaries.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0
	:og:description: When range() produces all the values between two boundaries
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-%232-%28%24end%29-must-be-a-single-byte-string-if.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0
	:twitter:description: range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0: When range() produces all the values between two boundaries
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#2-($end)-must-be-a-single-byte-string-if.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#2-($end)-must-be-a-single-byte-string-if.html","name":"range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 20 Aug 2025 10:19:27 +0000","dateModified":"Wed, 20 Aug 2025 10:19:27 +0000","description":"When range() produces all the values between two boundaries","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/argument-#2-($end)-must-be-a-single-byte-string-if.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When range() produces all the values between two boundaries. These two boundaries must be of the same type, for consistency purpose. Hence, when one is a one character string, the second one also needs to be a one character string, and range() generates all the values between these strings.

Example
_______

.. code-block:: php

   <?php
   
   range('c', 3);
   
   ?>


Literal Examples
****************
+ range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0

Solutions
_________

+ Use another string as second argument.
+ Call range with two integers, and use chr() on each element of the array to turn them into characters.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `rangeSingleByteString <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeSingleByteString.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `rangeSingleByteString <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeSingleByteString.html>`_.
