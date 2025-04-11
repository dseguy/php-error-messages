.. _cannot-unset-readonly-property-%s::\$%s:

Cannot unset readonly property %s::$%s
--------------------------------------
 
.. meta::
	:description:
		Cannot unset readonly property %s::$%s: Once a ``readonly`` property has been set, it cannot be unset.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot unset readonly property %s::$%s
	:og:description: Once a ``readonly`` property has been set, it cannot be unset
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-readonly-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unset readonly property %s::$%s
	:twitter:description: Cannot unset readonly property %s::$%s: Once a ``readonly`` property has been set, it cannot be unset
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-readonly-property-%s::$%s.html","name":"Cannot unset readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Feb 2025 14:18:32 +0000","dateModified":"Sun, 23 Feb 2025 14:18:32 +0000","description":"Once a ``readonly`` property has been set, it cannot be unset","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-unset-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Once a ``readonly`` property has been set, it cannot be unset. That would defeat the whoe purpose of ``readonly``.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public readonly $property;
       
       function __construct($a) {
           $this->property = $a;
           unset($this->property);
       }
   }
   
   ?>


Literal Examples
****************
+ Cannot unset readonly property X::$property

Solutions
_________

+ Use clone to create a new object, and have a chance to change that value.
+ Remove the ``unset`` call.
+ Remove the ``readonly`` property.
