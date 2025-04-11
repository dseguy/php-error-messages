.. _property-with-asymmetric-visibility-%s::\$%s-must-have-type:

Property with asymmetric visibility %s::$%s must have type
----------------------------------------------------------
 
.. meta::
	:description:
		Property with asymmetric visibility %s::$%s must have type: Asymmetric visibility, such as ``protected(set)`` only applies to a typed property.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property with asymmetric visibility %s::$%s must have type
	:og:description: Asymmetric visibility, such as ``protected(set)`` only applies to a typed property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-with-asymmetric-visibility-%25s%3A%3A%24%25s-must-have-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property with asymmetric visibility %s::$%s must have type
	:twitter:description: Property with asymmetric visibility %s::$%s must have type: Asymmetric visibility, such as ``protected(set)`` only applies to a typed property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-with-asymmetric-visibility-%s::$%s-must-have-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-with-asymmetric-visibility-%s::$%s-must-have-type.html","name":"Property with asymmetric visibility %s::$%s must have type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Mar 2025 09:37:22 +0000","dateModified":"Sun, 16 Mar 2025 09:37:22 +0000","description":"Asymmetric visibility, such as ``protected(set)`` only applies to a typed property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-with-asymmetric-visibility-%s::$%s-must-have-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Asymmetric visibility, such as ``protected(set)`` only applies to a typed property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	static protected(set) int $property;
   }
   
   ?>


Literal Examples
****************
+ Property with asymmetric visibility x::$property must have type

Solutions
_________

+ Remove the asymmetric property.
+ Add a type to the property.
