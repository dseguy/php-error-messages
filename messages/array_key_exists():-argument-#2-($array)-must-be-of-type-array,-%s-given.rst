.. _array_key_exists():-argument-#2-(\$array)-must-be-of-type-array,-%s-given:

array_key_exists(): Argument #2 ($array) must be of type array, %s given
------------------------------------------------------------------------
 
.. meta::
	:description:
		array_key_exists(): Argument #2 ($array) must be of type array, %s given: Until PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: array_key_exists(): Argument #2 ($array) must be of type array, %s given
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array_key_exists%28%29%3A-argument-%232-%28%24array%29-must-be-of-type-array%2C-%25s-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_key_exists(): Argument #2 ($array) must be of type array, %s given
	:twitter:description: array_key_exists(): Argument #2 ($array) must be of type array, %s given: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_key_exists():-argument-#2-($array)-must-be-of-type-array,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array_key_exists():-argument-#2-($array)-must-be-of-type-array,-%s-given.html","name":"array_key_exists(): Argument #2 ($array) must be of type array, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 15 Apr 2025 20:30:40 +0000","dateModified":"Tue, 15 Apr 2025 20:30:40 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array_key_exists():-argument-#2-($array)-must-be-of-type-array,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.0, it was possible to use array_key_exists() on both arrays, and objects. The objects were considered as an array, where the properties are the indices, linked to their values.

Since PHP 8.0, it is a deprecated behavior, and in a later version, PHP will make the typing more strict.

The other types, such as integer or string, are not accepted either.

Example
_______

.. code-block:: php

   <?php
   
   $object = (object) ['a' => 1]; // stdClass 
   var_dump(array_key_exists('a', $object));
   
   ?>


Literal Examples
****************
+ array_key_exists(): Argument #2 ($array) must be of type array, stdClass given
+ array_key_exists(): Argument #2 ($array) must be of type array, string given
+ array_key_exists(): Argument #2 ($array) must be of type array, int given

Solutions
_________

+ Cast the object to array before searching.
+ Call a method on the object to convert it to an array, before searching.
+ Create a search method, among the properties, on the object.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `array_key_existsOnObjects <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_key_existsOnObjects.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `array_key_existsOnObjects <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_key_existsOnObjects.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/ArrayKeyExistsWithObjects <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ArrayKeyExistsWithObjects.html>`_.
