.. _must-be-greater-than-or-equal-to-1:

must be greater than or equal to 1
----------------------------------
 
.. meta::
	:description:
		must be greater than or equal to 1: The second argument of ``gmp_import()`` is the number of characters to read in the original string, to build a GMP digit.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be greater than or equal to 1
	:og:description: The second argument of ``gmp_import()`` is the number of characters to read in the original string, to build a GMP digit
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-greater-than-or-equal-to-1.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be greater than or equal to 1
	:twitter:description: must be greater than or equal to 1: The second argument of ``gmp_import()`` is the number of characters to read in the original string, to build a GMP digit
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-greater-than-or-equal-to-1.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-greater-than-or-equal-to-1.html","name":"must be greater than or equal to 1","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 09:31:15 +0000","dateModified":"Thu, 05 Feb 2026 09:31:15 +0000","description":"The second argument of ``gmp_import()`` is the number of characters to read in the original string, to build a GMP digit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-greater-than-or-equal-to-1.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The second argument of ``gmp_import()`` is the number of characters to read in the original string, to build a GMP digit. This size must be 1 or larger, and the string's length must be a multiple of that number.

Example
_______

.. code-block:: php

   <?php
   gmp_import('11', -2);
   ?>


Literal Examples
****************
+ Argument #2 ($word_size) must be greater than or equal to 1

Solutions
_________

+ Use the default value of 1, by omitting it.
+ Use a postive number as second argument.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
