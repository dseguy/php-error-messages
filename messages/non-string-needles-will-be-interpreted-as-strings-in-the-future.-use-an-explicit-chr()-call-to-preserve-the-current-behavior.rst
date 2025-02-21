.. _non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior:

Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior
----------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior: Until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr%28%29-call-to-preserve-the-current-behavior.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior
	:twitter:description: Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior.html","name":"Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.0, strpos() accepted integers as second argument. Then, it would automagically, transform them into their equivalent. Hence, it returned 2 in PHP 7.4.

In PHP 8.0 and later, the integer is used as a string. Unless the ASCII characters and the string matches, it would return nothing.

Example
_______

.. code-block:: php

   <?php
   
   // 99 is ASCII for c
   print strpos('abc99', 99);
   
   // displays 3 in PHP 8.0+
   // displays 2 in PHP 7.4-
   
   ?>

Solutions
_________

+ Use ``chr(99)`` instead of ``99``, to ensure the second argument is a string.
+ Convert the second argument into a string first.

Related Error Messages
______________________

+ :ref:`needle-is-not-a-string-or-an-integer`
