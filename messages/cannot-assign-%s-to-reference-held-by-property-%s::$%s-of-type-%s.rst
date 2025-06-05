.. _cannot-assign-%s-to-reference-held-by-property-%s::\$%s-of-type-%s:

Cannot assign %s to reference held by property %s::$%s of type %s
-----------------------------------------------------------------
 
.. meta::
	:description:
		Cannot assign %s to reference held by property %s::$%s of type %s: When a variable holds a reference to a property, it also has to satisfy the type constraints.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot assign %s to reference held by property %s::$%s of type %s
	:og:description: When a variable holds a reference to a property, it also has to satisfy the type constraints
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-%25s-to-reference-held-by-property-%25s%3A%3A%24%25s-of-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot assign %s to reference held by property %s::$%s of type %s
	:twitter:description: Cannot assign %s to reference held by property %s::$%s of type %s: When a variable holds a reference to a property, it also has to satisfy the type constraints
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-reference-held-by-property-%s::$%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-reference-held-by-property-%s::$%s-of-type-%s.html","name":"Cannot assign %s to reference held by property %s::$%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Jun 2025 05:25:15 +0000","dateModified":"Thu, 05 Jun 2025 05:25:15 +0000","description":"When a variable holds a reference to a property, it also has to satisfy the type constraints","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-reference-held-by-property-%s::$%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a variable holds a reference to a property, it also has to satisfy the type constraints. Here, by using a typed reference, the ``$var`` variable looks like another local variable, but it is in fact typed.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public static int $int = 1;
   }
   
   $var = &X::$int;
   
   $var = 'abc';
   ?>


Literal Examples
****************
+ Cannot assign string to reference held by property X::$int of type int

Solutions
_________

+ Remove the type from the property.
+ Use a valid value to the property.
+ Remove the initial link to the property until the value is of the correct type.
