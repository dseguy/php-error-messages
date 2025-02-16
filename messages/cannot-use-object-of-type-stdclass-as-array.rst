.. _cannot-use-object-of-type-stdclass-as-array:

Cannot use object of type stdClass as array
-------------------------------------------
 
.. meta::
	:description:
		Cannot use object of type stdClass as array: The array syntax ``$variable[index]`` is only available for arrays and strings.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use object of type stdClass as array
	:og:description: The array syntax ``$variable[index]`` is only available for arrays and strings
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-object-of-type-stdclass-as-array.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use object of type stdClass as array
	:twitter:description: Cannot use object of type stdClass as array: The array syntax ``$variable[index]`` is only available for arrays and strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-object-of-type-stdclass-as-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-object-of-type-stdclass-as-array.html","name":"Cannot use object of type stdClass as array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The array syntax ``$variable[index]`` is only available for arrays and strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-object-of-type-stdclass-as-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The array syntax ``$variable[index]`` is only available for arrays and strings. When used on objects, PHP emits a fatal error.  

The boolean ``false`` and the ``null`` value still accept this behavior. The first is deprecated in PHP 8.1, and the second valid in PHP 8.3.

Example
_______

.. code-block:: php

   <?php
   
   $x = new Stdclass();
   $x[0] = 1;
   
   ?>

Solutions
_________

+ Check for type before using the array syntax.
+ Keep using consistent types with each variables.
+ Set type with properties to ensure they are consistent.
+ Cast the object to array before usage.


In previous PHP versions, this error message used to be :ref:`cannot-unset-offset-in-a-non-array-variable`.
