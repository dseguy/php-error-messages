.. _static-property-%s::\$%s-cannot-be-readonly:

Static property %s::$%s cannot be readonly
------------------------------------------
 
.. meta::
	:description:
		Static property %s::$%s cannot be readonly: Static properties cannot use the readonly option.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Static property %s::$%s cannot be readonly
	:og:description: Static properties cannot use the readonly option
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/static-property-%25s%3A%3A%24%25s-cannot-be-readonly.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static property %s::$%s cannot be readonly
	:twitter:description: Static property %s::$%s cannot be readonly: Static properties cannot use the readonly option
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static-property-%s::$%s-cannot-be-readonly.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static-property-%s::$%s-cannot-be-readonly.html","name":"Static property %s::$%s cannot be readonly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jan 2025 10:36:30 +0000","dateModified":"Mon, 20 Jan 2025 10:36:30 +0000","description":"Static properties cannot use the readonly option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static-property-%s::$%s-cannot-be-readonly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Static properties cannot use the readonly option. ``readonly`` does not support static properties.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public static readonly int $property;
   }
   
   ?>


Literal Examples
****************
+ Static property X::$property cannot be readonly

Solutions
_________

+ Remove the readonly option.
+ Turn the static property into a normal property.
