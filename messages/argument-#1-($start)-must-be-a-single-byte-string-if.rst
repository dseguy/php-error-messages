.. _argument-#1-(\$start)-must-be-a-single-byte-string-if:

range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0
-------------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0: When range() produces all the values between two boundaries.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0
	:og:description: When range() produces all the values between two boundaries
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-%231-%28%24start%29-must-be-a-single-byte-string-if.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0
	:twitter:description: range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0: When range() produces all the values between two boundaries
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#1-($start)-must-be-a-single-byte-string-if.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#1-($start)-must-be-a-single-byte-string-if.html","name":"range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 12:55:17 +0000","dateModified":"Fri, 04 Jul 2025 12:55:17 +0000","description":"When range() produces all the values between two boundaries","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/argument-#1-($start)-must-be-a-single-byte-string-if.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When range() produces all the values between two boundaries. These two boundaries must be of the same type, for consistency purpose. Hence, when one is a string, the second one also needs to be a string, and range() will generate all the values between these strings.

Example
_______

.. code-block:: php

   <?php
   
   range(1, 'b');
   
   ?>


Literal Examples
****************
+ range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0

Solutions
_________

+ Cast the integer to a string.
+ Cast the string to an integer.
