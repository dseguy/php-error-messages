.. _keys-must-be-of-type-int|string-during-array-unpacking:

Keys must be of type int|string during array unpacking
------------------------------------------------------
 
.. meta::
	:description:
		Keys must be of type int|string during array unpacking: Argument unpacking is the transformation of an array into a list of arguments.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Keys must be of type int|string during array unpacking
	:og:description: Argument unpacking is the transformation of an array into a list of arguments
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/keys-must-be-of-type-int%7Cstring-during-array-unpacking.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Keys must be of type int|string during array unpacking
	:twitter:description: Keys must be of type int|string during array unpacking: Argument unpacking is the transformation of an array into a list of arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/keys-must-be-of-type-int|string-during-array-unpacking.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/keys-must-be-of-type-int|string-during-array-unpacking.html","name":"Keys must be of type int|string during array unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Argument unpacking is the transformation of an array into a list of arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/keys-must-be-of-type-int|string-during-array-unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Argument unpacking is the transformation of an array into a list of arguments. With arrays, the keys can only be integers or strings: they will be used for positional and named arguments, respectively.

Argument unpacking also applies to iterator and generator. In that case, it is possible to have keys that are not of type integer or string: they might be of any type. Yet, the unpacking of arguments needs these types to understand what kind of arguments is involved.

Any other type is forbidden : null, boolean, float (even without decimal part), and objects with __toString() magic methods. There is not type juggling applied, with or without strict_types directive.

Example
_______

.. code-block:: php

   <?php
   function foo(...$args) {
       var_dump($args);
   }
   function gen() {
       yield 1.23 => 123;
       yield '2.34' => 234;
   }
   
   try {
       print_r([...gen()]);
   } catch (Error $ex) {
       echo 'Exception: ' . $ex->getMessage() . PHP_EOL;
   }
   
   ?>

Solutions
_________

+ Ensure the iterator yields only integer or string types.
+ Ensure the generator yields only integer or string types.
