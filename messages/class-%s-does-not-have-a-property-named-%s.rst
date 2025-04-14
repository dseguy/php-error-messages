.. _class-%s-does-not-have-a-property-named-%s:

Class %s does not have a property named %s
------------------------------------------
 
.. meta::
	:description:
		Class %s does not have a property named %s: The reflection extension allows the manipulation of various aspect of existing objects.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s does not have a property named %s
	:og:description: The reflection extension allows the manipulation of various aspect of existing objects
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-does-not-have-a-property-named-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s does not have a property named %s
	:twitter:description: Class %s does not have a property named %s: The reflection extension allows the manipulation of various aspect of existing objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-does-not-have-a-property-named-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-does-not-have-a-property-named-%s.html","name":"Class %s does not have a property named %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 14 Apr 2025 20:01:58 +0000","dateModified":"Mon, 14 Apr 2025 20:01:58 +0000","description":"The reflection extension allows the manipulation of various aspect of existing objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-does-not-have-a-property-named-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The reflection extension allows the manipulation of various aspect of existing objects. Yet, it doesn't allow the assignation of values to non-existing properties, static or not.

Example
_______

.. code-block:: php

   <?php
   class X { }
   
   $rc = new ReflectionClass('X');
   $rc->setStaticPropertyValue('property', 'value');
   
   ?>


Literal Examples
****************
+ Class X does not have a property named property

Solutions
_________

+ Make sure the property exists before trying to assign it a value.
+ Make sure the property is static.
