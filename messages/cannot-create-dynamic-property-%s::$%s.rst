.. _cannot-create-dynamic-property-%s::\$%s:

Cannot create dynamic property %s::$%s
--------------------------------------
 
.. meta::
	:description:
		Cannot create dynamic property %s::$%s: It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot create dynamic property %s::$%s
	:og:description: It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-create-dynamic-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot create dynamic property %s::$%s
	:twitter:description: Cannot create dynamic property %s::$%s: It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-dynamic-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-dynamic-property-%s::$%s.html","name":"Cannot create dynamic property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 07:05:41 +0000","dateModified":"Fri, 27 Jun 2025 07:05:41 +0000","description":"It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-create-dynamic-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object. This is valid for both normal and static properties.

This error message also appears when the class is readonly: then, it is not possible to create any dynamic property.

Example
_______

.. code-block:: php

   <?php
   
   enum E: int {
       case Foo = 0;
   }
   
   $variable = E::Foo;
   $variable->property = 1;
   
   readonly class X {}
   
   $x = new X;
   $x->p = 1;
   
   ?>


Literal Examples
****************
+ Cannot create dynamic property E::$property

Solutions
_________

+ Don't create a property on an enumeration.
+ Don't create a property on a readonly class.
+ Encapsulate the enumeration in an another class, and set the property on this class.
