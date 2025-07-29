.. _array-callback-has-to-contain-indices-0-and-1:

Array callback has to contain indices 0 and 1
---------------------------------------------
 
.. meta::
	:description:
		Array callback has to contain indices 0 and 1: PHP uses an array format to represents callback methods: it is an array with two elements.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Array callback has to contain indices 0 and 1
	:og:description: PHP uses an array format to represents callback methods: it is an array with two elements
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-callback-has-to-contain-indices-0-and-1.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array callback has to contain indices 0 and 1
	:twitter:description: Array callback has to contain indices 0 and 1: PHP uses an array format to represents callback methods: it is an array with two elements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-callback-has-to-contain-indices-0-and-1.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-callback-has-to-contain-indices-0-and-1.html","name":"Array callback has to contain indices 0 and 1","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 29 Jul 2025 17:36:50 +0000","dateModified":"Tue, 29 Jul 2025 17:36:50 +0000","description":"PHP uses an array format to represents callback methods: it is an array with two elements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-callback-has-to-contain-indices-0-and-1.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP uses an array format to represents callback methods: it is an array with two elements. The first element is the class, and the second element is the method. To be valid, this array must also only use the index 0 and 1 (resp.) for these elements.

Also, note that this array must only have two elements.

With the explicit 0 and 1 indices, the order of the elements are not important in the array. With omitted indices, the order is important for PHP to differentiate which is the class, and which is the method.

Example
_______

.. code-block:: php

   <?php
   
   class X { 
       static function foo() {} 
   }
   
   $callback = [3 => X::class, 'foo'];
   
   $callback();
   
   ?>

Solutions
_________

+ Apply array_values() to the array before using it as a callback.
+ Convert the array syntax to the new x::foo(...) syntax.
+ Convert the array syntax to the string '\x::foo' syntax.
+ Remove the index in the array definition.

Related Error Messages
______________________

+ :ref:`array-callback-must-have-exactly-two-elements`
