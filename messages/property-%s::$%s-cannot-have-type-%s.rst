.. _property-%s::\$%s-cannot-have-type-%s:

Property %s::$%s cannot have type %s
------------------------------------
 
.. meta::
	:description:
		Property %s::$%s cannot have type %s: Some native PHP types are not allowed with a property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property %s::$%s cannot have type %s
	:og:description: Some native PHP types are not allowed with a property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-%25s%3A%3A%24%25s-cannot-have-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property %s::$%s cannot have type %s
	:twitter:description: Property %s::$%s cannot have type %s: Some native PHP types are not allowed with a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-%s::$%s-cannot-have-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-%s::$%s-cannot-have-type-%s.html","name":"Property %s::$%s cannot have type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Dec 2024 10:04:34 +0000","dateModified":"Tue, 31 Dec 2024 10:04:34 +0000","description":"Some native PHP types are not allowed with a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-%s::$%s-cannot-have-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Some native PHP types are not allowed with a property. This is the case of void, never and callable. Any mention of them, alone or in a compsed type generates this error. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public callable|int $property = 1;
   }
   
   ?>


Literal Examples
****************
+ Property x::$p cannot have type callable

Solutions
_________

+ Remove any illegal type from the definition of the property.
+ Remove all types from the definition of the property.

Related Error Messages
______________________

+ :ref:`class-constant-%s::%s-cannot-have-type-%s`
