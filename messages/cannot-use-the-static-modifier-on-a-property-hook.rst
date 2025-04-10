.. _cannot-use-the-static-modifier-on-a-property-hook:

Cannot use the static modifier on a property hook
-------------------------------------------------
 
.. meta::
	:description:
		Cannot use the static modifier on a property hook: It is not possible to make individual property hooks static.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use the static modifier on a property hook
	:og:description: It is not possible to make individual property hooks static
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-static-modifier-on-a-property-hook.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use the static modifier on a property hook
	:twitter:description: Cannot use the static modifier on a property hook: It is not possible to make individual property hooks static
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-static-modifier-on-a-property-hook.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-static-modifier-on-a-property-hook.html","name":"Cannot use the static modifier on a property hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Apr 2025 17:24:38 +0000","dateModified":"Mon, 07 Apr 2025 17:24:38 +0000","description":"It is not possible to make individual property hooks static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-the-static-modifier-on-a-property-hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to make individual property hooks static. The keyword must be set at the property definition level, for all the hooks.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public $property {
   		static get;
   	}
   }
   
   ?>

Solutions
_________

+ Remove the abstract keyword, and put it on the property definition level.
