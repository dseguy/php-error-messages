.. _array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported:

Array and string offset access syntax with curly braces is no longer supported
------------------------------------------------------------------------------
 
.. meta::
	:description:
		Array and string offset access syntax with curly braces is no longer supported: PHP used to support the curly braces ``{}`` to access elements in an array and a string.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Array and string offset access syntax with curly braces is no longer supported
	:og:description: PHP used to support the curly braces ``{}`` to access elements in an array and a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array and string offset access syntax with curly braces is no longer supported
	:twitter:description: Array and string offset access syntax with curly braces is no longer supported: PHP used to support the curly braces ``{}`` to access elements in an array and a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported.html","name":"Array and string offset access syntax with curly braces is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Oct 2025 10:31:54 +0000","dateModified":"Sun, 19 Oct 2025 10:31:54 +0000","description":"PHP used to support the curly braces ``{}`` to access elements in an array and a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP used to support the curly braces ``{}`` to access elements in an array and a string. This was deprecated in PHP 7.4 and abandoned in PHP 8.0. The only operator to access an element is the square brackets ``[]``.

Example
_______

.. code-block:: php

   <?php
   
   $string = 'abc';
   echo $string{1}; // b
   
   $array = ['A', 'B', 'C'];
   echo $array{1};  // B
   
   
   ?>

Solutions
_________

+ Switch to the square brackets.
+ Use the substr() function to extract one string char.


In previous PHP versions, this error message used to be :ref:`array-and-string-offset-access-syntax-with-curly-braces-is-deprecated`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `curly_braces <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/curly_braces.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/DeprecateDollarCurly <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/DeprecateDollarCurly.html>`_.
