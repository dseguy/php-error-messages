.. _array-and-string-offset-access-syntax-with-curly-braces-is-deprecated:

Array and string offset access syntax with curly braces is deprecated
---------------------------------------------------------------------
 
.. meta::
	:description:
		Array and string offset access syntax with curly braces is deprecated: PHP used to support the curly braces ``{}`` to access elements in an array and a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Array and string offset access syntax with curly braces is deprecated
	:og:description: PHP used to support the curly braces ``{}`` to access elements in an array and a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array and string offset access syntax with curly braces is deprecated
	:twitter:description: Array and string offset access syntax with curly braces is deprecated: PHP used to support the curly braces ``{}`` to access elements in an array and a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html","name":"Array and string offset access syntax with curly braces is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Feb 2025 13:45:38 +0000","dateModified":"Sat, 22 Feb 2025 13:45:38 +0000","description":"PHP used to support the curly braces ``{}`` to access elements in an array and a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-and-string-offset-access-syntax-with-curly-braces-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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


In previous PHP versions, this error message used to be :ref:`array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported`.


In more recent PHP versions, this error message is now :ref:`syntax-error,-unexpected-token-"{",-expecting-","-or-";"`.
