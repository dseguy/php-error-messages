.. _cannot-use-positional-argument-after-argument-unpacking:

Cannot use positional argument after argument unpacking
-------------------------------------------------------
 
.. meta::
	:description:
		Cannot use positional argument after argument unpacking: It is not possible to put simple arguments after an unpacked argument.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use positional argument after argument unpacking
	:og:description: It is not possible to put simple arguments after an unpacked argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-positional-argument-after-argument-unpacking.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use positional argument after argument unpacking
	:twitter:description: Cannot use positional argument after argument unpacking: It is not possible to put simple arguments after an unpacked argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-argument-unpacking.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-argument-unpacking.html","name":"Cannot use positional argument after argument unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"It is not possible to put simple arguments after an unpacked argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-argument-unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to put simple arguments after an unpacked argument. Said another way, the unpacked arguments must be the last one in the list. 

This happens when using a mix of array unpacking and arguments. It also happens when spreading an array with a mix of numeric and string keys.

Example
_______

.. code-block:: php

   <?php
   
   // Valid, the unpacked argument is the last
   foo($a, $b, ...$c);
   
   // Also valid, the unpacked arguments are the last
   foo($a, $b, ...$c, ...$d);
   
   // Not valid
   foo(...$a, $b, ...$c);
   
   // This is invalid, as the numeric arguments are after the 'x'
   $a = ['x' => [1], 13, 14];
   foo(...$a);
   
   // This is valid, as long as x is not argument 0 or 1. Then, it yields another error.
   $a = [13, 14, 'x' => [1]];
   foo(...$a);
   
   ?>

Solutions
_________

+ Move the positional arguments to be beginning of the signature call.
+ Sort the unpacked array with krsort() or ksort(), before or after PHP 8.2.
+ Remove the positional arguments.

Related Error Messages
______________________

+ :ref:`named-parameter-$%s-overwrites-previous-argument`
