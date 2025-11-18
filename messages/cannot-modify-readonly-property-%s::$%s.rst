.. _cannot-modify-readonly-property-%s::\$%s:

Cannot modify readonly property %s::$%s
---------------------------------------
 
.. meta::
	:description:
		Cannot modify readonly property %s::$%s: readonly properties can only be set once.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot modify readonly property %s::$%s
	:og:description: readonly properties can only be set once
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-modify-readonly-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot modify readonly property %s::$%s
	:twitter:description: Cannot modify readonly property %s::$%s: readonly properties can only be set once
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-modify-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-modify-readonly-property-%s::$%s.html","name":"Cannot modify readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Nov 2025 21:02:09 +0000","dateModified":"Mon, 17 Nov 2025 21:02:09 +0000","description":"readonly properties can only be set once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-modify-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
readonly properties can only be set once. 

When such property is set in the constructor, there should not be another assignation of this property in another method: it would fail. 

When the property is set in another method, then, such method shall only be called once. 

They also should be set from their original class (or its children) and not from the public space.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	public readonly int $property;
   	public int $other;
   }
   
   $x = new X;
   $x->other = 3;
   $x->property = 5;
   
   ?>


Literal Examples
****************
+ Cannot modify readonly property x::$property

Solutions
_________

+ Drop the readonly option.
+ Create an accessor to set the property in the correct context.

Related Error Messages
______________________

+ :ref:`cannot-modify-readonly-object-of-class-%s`
