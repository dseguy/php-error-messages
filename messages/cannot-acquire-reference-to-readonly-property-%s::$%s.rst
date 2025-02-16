.. _cannot-acquire-reference-to-readonly-property-%s::\$%s:

Cannot acquire reference to readonly property %s::$%s
-----------------------------------------------------
 
.. meta::
	:description:
		Cannot acquire reference to readonly property %s::$%s: It is not possible to create a reference to a readonly property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot acquire reference to readonly property %s::$%s
	:og:description: It is not possible to create a reference to a readonly property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-acquire-reference-to-readonly-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot acquire reference to readonly property %s::$%s
	:twitter:description: Cannot acquire reference to readonly property %s::$%s: It is not possible to create a reference to a readonly property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-acquire-reference-to-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-acquire-reference-to-readonly-property-%s::$%s.html","name":"Cannot acquire reference to readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"It is not possible to create a reference to a readonly property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-acquire-reference-to-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to create a reference to a readonly property. The property is readonly and cannot be changed. On the other hand, references are never readonly, and provide read and write access to the data. PHP has no way to check that the reference is readonly. Hence, references on readonly properties are not allowed.

Example
_______

.. code-block:: php

   <?php
   
   class Test {
       public readonly int $property;
   
       public function init() {
           $this->property = 1;
       }
   }
   
   $test = new Test;
   $test->init();
   
   try {
       foreach ($test as &$property) {}
   } catch (Error $e) {
       echo $e->getMessage(), \n;
   }
   
   ?>


Literal Examples
****************
+ Cannot acquire reference to readonly property Test::$property

Solutions
_________

+ Remove the readonly option on the property.
+ Remove the reference to the property.
