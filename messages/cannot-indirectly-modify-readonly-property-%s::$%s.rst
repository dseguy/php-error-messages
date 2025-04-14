.. _cannot-indirectly-modify-readonly-property-%s::\$%s:

Cannot indirectly modify readonly property %s::$%s
--------------------------------------------------
 
.. meta::
	:description:
		Cannot indirectly modify readonly property %s::$%s: A readonly property cannot be changed after it was set.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot indirectly modify readonly property %s::$%s
	:og:description: A readonly property cannot be changed after it was set
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-indirectly-modify-readonly-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot indirectly modify readonly property %s::$%s
	:twitter:description: Cannot indirectly modify readonly property %s::$%s: A readonly property cannot be changed after it was set
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-indirectly-modify-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-indirectly-modify-readonly-property-%s::$%s.html","name":"Cannot indirectly modify readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 14 Apr 2025 20:19:30 +0000","dateModified":"Mon, 14 Apr 2025 20:19:30 +0000","description":"A readonly property cannot be changed after it was set","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-indirectly-modify-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A readonly property cannot be changed after it was set. This includes trying to reach the property via a reference.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       readonly public string $property;
   
       public function __construct() {
           $this->property = 'A';
       }
   }
   
   $object = new X;
   $variable =& $object->property;
   
   ?>


Literal Examples
****************
+ Cannot indirectly modify readonly property X::$property

Solutions
_________

+ 
