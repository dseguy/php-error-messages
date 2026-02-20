.. _must-be-a-multiple-of-argument-#2-(\$word_size):

must be a multiple of argument #2 ($word_size)
----------------------------------------------
 
.. meta::
	:description:
		must be a multiple of argument #2 ($word_size): The second option of ``gmp_import()`` configures the number of bytes to take in the string to build the number.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a multiple of argument #2 ($word_size)
	:og:description: The second option of ``gmp_import()`` configures the number of bytes to take in the string to build the number
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-multiple-of-argument-%232-%28%24word_size%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a multiple of argument #2 ($word_size)
	:twitter:description: must be a multiple of argument #2 ($word_size): The second option of ``gmp_import()`` configures the number of bytes to take in the string to build the number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-multiple-of-argument-#2-($word_size).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-multiple-of-argument-#2-($word_size).html","name":"must be a multiple of argument #2 ($word_size)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 09:27:06 +0000","dateModified":"Thu, 05 Feb 2026 09:27:06 +0000","description":"The second option of ``gmp_import()`` configures the number of bytes to take in the string to build the number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-multiple-of-argument-#2-($word_size).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The second option of ``gmp_import()`` configures the number of bytes to take in the string to build the number. Each GMP digit will be read over ``$word_size`` characters. When the string has a length that is not a multiple of the size of each word, GMP will run short of a few bytes, and emits the error.

Example
_______

.. code-block:: php

   <?php
   gmp_import('aa', 3);
   ?>


Literal Examples
****************
+ Argument #1 ($data) must be a multiple of argument #2 ($word_size)

Solutions
_________

+ Check that the string length is a multiple of the 2nd argument of ``gmp_import()``.
+ Use a word length that is a factor of the string length.
+ Use a word length of 1, which works all the time, yet may not yield the expected result.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
