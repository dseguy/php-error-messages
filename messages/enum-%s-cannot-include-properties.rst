.. _enum-%s-cannot-include-properties:

Enum %s cannot include properties
---------------------------------
 
.. meta::
	:description:
		Enum %s cannot include properties: Enumeration cannot define a property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enum %s cannot include properties
	:og:description: Enumeration cannot define a property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-%25s-cannot-include-properties.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enum %s cannot include properties
	:twitter:description: Enum %s cannot include properties: Enumeration cannot define a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-include-properties.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-include-properties.html","name":"Enum %s cannot include properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Dec 2024 10:26:34 +0000","dateModified":"Tue, 31 Dec 2024 10:26:34 +0000","description":"Enumeration cannot define a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-include-properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Enumeration cannot define a property. They can only define constants and methods. 

Enum can use a trait, and import several methods. Traits can also define properties, which are mixed with the host. On the other hand, enum cannot define properties: when a trait is used by an enumeration, it should not have any properties. It is also the case for traits of traits. 

Example
_______

.. code-block:: php

   <?php
   
   enum D {
      private $p = 1;
   }
   
   trait T {
      private int $property; 
   }
   
   enum E {
       use T;
   }
   
   ?>

Solutions
_________

+ Remove the property from the trait.
+ Split the trait in two traits, and include the new trait that has no property.
