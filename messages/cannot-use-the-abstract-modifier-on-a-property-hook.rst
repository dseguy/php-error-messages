.. _cannot-use-the-abstract-modifier-on-a-property-hook:

Cannot use the abstract modifier on a property hook
---------------------------------------------------
 
.. meta::
	:description:
		Cannot use the abstract modifier on a property hook: It is not possible to make individual property hooks abstract.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use the abstract modifier on a property hook
	:og:description: It is not possible to make individual property hooks abstract
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-abstract-modifier-on-a-property-hook.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use the abstract modifier on a property hook
	:twitter:description: Cannot use the abstract modifier on a property hook: It is not possible to make individual property hooks abstract
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-abstract-modifier-on-a-property-hook.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-abstract-modifier-on-a-property-hook.html","name":"Cannot use the abstract modifier on a property hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is not possible to make individual property hooks abstract","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-the-abstract-modifier-on-a-property-hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to make individual property hooks abstract. The keyword must be set at the property definition level, for all the hooks.

Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
   	public $property {
   		abstract get;
   	}
   }
   
   ?>

Solutions
_________

+ Remove the abstract keyword, and put it on the property definition level.
