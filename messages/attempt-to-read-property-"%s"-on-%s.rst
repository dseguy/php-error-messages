.. _attempt-to-read-property-"%s"-on-%s:

Attempt to read property "%s" on %s
-----------------------------------
 
.. meta::
	:description:
		Attempt to read property "%s" on %s: This error reports that a non-object was used with an object syntax.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Attempt to read property &quot;%s&quot; on %s
	:og:description: This error reports that a non-object was used with an object syntax
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/attempt-to-read-property-%22%25s%22-on-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attempt to read property "%s" on %s
	:twitter:description: Attempt to read property "%s" on %s: This error reports that a non-object was used with an object syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attempt-to-read-property-\"%s\"-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attempt-to-read-property-\"%s\"-on-%s.html","name":"Attempt to read property \"%s\" on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error reports that a non-object was used with an object syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attempt-to-read-property-\"%s\"-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that a non-object was used with an object syntax. Non-objects are integers, floats, strings, null, booleans, etc.

This is a warning, so PHP will continue execution, using ``null`` as a result of this operation.

Example
_______

.. code-block:: php

   <?php
   
   $integer = 1;
   var_dump($integer->a);
   
   $array = [3];
   var_dump($array?->a);
   
   ?>


Literal Examples
****************
+ Attempt to read property "a" on int
+ Attempt to read property "a" on array
+ Attempt to read property "a" on float
+ Attempt to read property "a" on string
+ Attempt to read property "a" on bool

Solutions
_________

+ Remove the use of the property.
+ Add a type to the underlying variable, to ensure it is an object.
+ Check the variable is an object.
