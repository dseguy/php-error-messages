.. _property-in-interface-cannot-be-explicitly-abstract.:

Property in interface cannot be explicitly abstract.
----------------------------------------------------
 
.. meta::
	:description:
		Property in interface cannot be explicitly abstract.: While PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property in interface cannot be explicitly abstract.
	:og:description: While PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-in-interface-cannot-be-explicitly-abstract..html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property in interface cannot be explicitly abstract.
	:twitter:description: Property in interface cannot be explicitly abstract.: While PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-explicitly-abstract..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-explicitly-abstract..html","name":"Property in interface cannot be explicitly abstract.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 16:00:19 +0000","dateModified":"Sun, 14 Sep 2025 16:00:19 +0000","description":"While PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-explicitly-abstract..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
While PHP 8.4 supports properties in an interface, as long as they are defining hooks, it is not possible to use explicitely the option ``abstract``.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       abstract $p { get; }
   }
   
   ?>

Solutions
_________

+ Remove the option ``abstract``. May be use ``public`` instead.
+ Move the property definition to an abstract class.
