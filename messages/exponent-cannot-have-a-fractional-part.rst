.. _exponent-cannot-have-a-fractional-part:

exponent cannot have a fractional part
--------------------------------------
 
.. meta::
	:description:
		exponent cannot have a fractional part: The exponent argument, aka the second, must be an integer value.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: exponent cannot have a fractional part
	:og:description: The exponent argument, aka the second, must be an integer value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/exponent-cannot-have-a-fractional-part.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: exponent cannot have a fractional part
	:twitter:description: exponent cannot have a fractional part: The exponent argument, aka the second, must be an integer value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/exponent-cannot-have-a-fractional-part.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/exponent-cannot-have-a-fractional-part.html","name":"exponent cannot have a fractional part","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The exponent argument, aka the second, must be an integer value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/exponent-cannot-have-a-fractional-part.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The exponent argument, aka the second, must be an integer value. It might be negative, or even zero, but it cannot be with a decimal separator.

PHP tries to round it, so float values with only zeros after the decimal separator may work.

Example
_______

.. code-block:: php

   <?php
   
   echo bcpow('4.2', '3.2', 2); // 74.08
   
   ?>

Solutions
_________

+ Check the argument with ``is_int()``.
+ Round the argument to an integer.
