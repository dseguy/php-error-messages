.. _cannot-assign-%s-to-property-%s::\$%s-of-type-%s:

Cannot assign %s to property %s::$%s of type %s
-----------------------------------------------
 
.. meta::
	:description:
		Cannot assign %s to property %s::$%s of type %s: This error signals that the wrong type was used when assigning values to a property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot assign %s to property %s::$%s of type %s
	:og:description: This error signals that the wrong type was used when assigning values to a property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-%25s-to-property-%25s%3A%3A%24%25s-of-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot assign %s to property %s::$%s of type %s
	:twitter:description: Cannot assign %s to property %s::$%s of type %s: This error signals that the wrong type was used when assigning values to a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-property-%s::$%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-property-%s::$%s-of-type-%s.html","name":"Cannot assign %s to property %s::$%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"This error signals that the wrong type was used when assigning values to a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-property-%s::$%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error signals that the wrong type was used when assigning values to a property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public int $property;
   }
   
   $x = new X;
   $x->property = 'de';
   
   ?>


Literal Examples
****************
+ Cannot assign string to property X::$property of type int

Solutions
_________

+ Add the type of this value to the type description.
+ Remove the type on the property.
+ Cast the value to the correct type.
