.. _class-%s-cannot-extend-enum-%s:

Class %s cannot extend enum %s
------------------------------
 
.. meta::
	:description:
		Class %s cannot extend enum %s: Enum are final classes, and cannot be extended: neither by other enum, nor by a class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot extend enum %s
	:og:description: Enum are final classes, and cannot be extended: neither by other enum, nor by a class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-extend-enum-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot extend enum %s
	:twitter:description: Class %s cannot extend enum %s: Enum are final classes, and cannot be extended: neither by other enum, nor by a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-enum-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-enum-%s.html","name":"Class %s cannot extend enum %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Sep 2025 16:15:47 +0000","dateModified":"Sun, 21 Sep 2025 16:15:47 +0000","description":"Enum are final classes, and cannot be extended: neither by other enum, nor by a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-enum-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Enum are final classes, and cannot be extended: neither by other enum, nor by a class.

Example
_______

.. code-block:: php

   <?php
   
   class X extends E {}
   
   enum E {}
   
   ?>


Literal Examples
****************
+ Class X cannot extend enum E

Solutions
_________

+ Add a class that compose the enum, and extends that class.
+ Remove the extension in the class.
