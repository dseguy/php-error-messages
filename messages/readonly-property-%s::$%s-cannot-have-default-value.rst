.. _readonly-property-%s::\$%s-cannot-have-default-value:

Readonly property %s::$%s cannot have default value
---------------------------------------------------
 
.. meta::
	:description:
		Readonly property %s::$%s cannot have default value: A readonly property is expected to be set once, and only once, at execution time.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Readonly property %s::$%s cannot have default value
	:og:description: A readonly property is expected to be set once, and only once, at execution time
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/readonly-property-%25s%3A%3A%24%25s-cannot-have-default-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly property %s::$%s cannot have default value
	:twitter:description: Readonly property %s::$%s cannot have default value: A readonly property is expected to be set once, and only once, at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-property-%s::$%s-cannot-have-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/readonly-property-%s::$%s-cannot-have-default-value.html","name":"Readonly property %s::$%s cannot have default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A readonly property is expected to be set once, and only once, at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/readonly-property-%s::$%s-cannot-have-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A readonly property is expected to be set once, and only once, at execution time. Then, it is not changed anymore. 

A property, whose value is known at compilation time should probably be a constant.

Example
_______

.. code-block:: php

   <?php
   
   class T {
   	public readonly int $i = 1;
   }
   
   ?>


Literal Examples
****************
+ Readonly property x::$i cannot have default value

Solutions
_________

+ Drop the readonly option.
+ Make the property a class constant.
