.. _cannot-%s-readonly-property-%s::\$%s-from-%s%s:

Cannot %s readonly property %s::$%s from %s%s
---------------------------------------------
 
.. meta::
	:description:
		Cannot %s readonly property %s::$%s from %s%s: Until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot %s readonly property %s::$%s from %s%s
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-%25s-readonly-property-%25s%3A%3A%24%25s-from-%25s%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot %s readonly property %s::$%s from %s%s
	:twitter:description: Cannot %s readonly property %s::$%s from %s%s: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-%s-readonly-property-%s::$%s-from-%s%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-%s-readonly-property-%s::$%s-from-%s%s.html","name":"Cannot %s readonly property %s::$%s from %s%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-%s-readonly-property-%s::$%s-from-%s%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.4, the assignation (first and final), of a readonly property had to be executed in the definition class. In the illustration, this means that ``$property`` must be assigned in the ``X`` class. This was applied all the time, without consideration for the visibility of the property.

Since PHP 8.4, visibility allowing, a readonly property may be defined in any of the child classes too.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public readonly int $property;
   }
   
   class Y extends X {
       function __construct() {
           $this->property = 5;
       }
   }
   
   $x = new Y;
   echo $x->property;
   
   ?>


Literal Examples
****************
+ Cannot initialize readonly property X::$property from scope Y
+ Cannot initialize readonly property X::$property from global scope

Solutions
_________

+ Upgrade to PHP 8.4.
+ Remove the readonly option.
