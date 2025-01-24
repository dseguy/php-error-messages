.. _cannot-unset-string-offsets:

Cannot unset string offsets
---------------------------
 
.. meta::
	:description:
		Cannot unset string offsets: While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot unset string offsets
	:og:description: While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-string-offsets.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unset string offsets
	:twitter:description: Cannot unset string offsets: While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-string-offsets.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-string-offsets.html","name":"Cannot unset string offsets","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 14 Nov 2024 17:11:10 +0000","dateModified":"Thu, 14 Nov 2024 17:11:10 +0000","description":"While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-unset-string-offsets.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function. Strings do not behave like an array, so it is not possible to remove one char with unset.

Example
_______

.. code-block:: php

   <?php
   
   $a = 'abc';
   unset($a);
   
   ?>

Solutions
_________

+ Explode() the string into an array, use the unset() on the array, and then, implode() it back into a string.
+ Use substr() twice, to cut out the unwanted character.
+ Use preg_replace(), to replace the character with an empty string.
+ Use strtr(), to replace the character with an empty string, if it is unique.
