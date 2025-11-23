.. _type-of-%s::\$%s-must-be-omitted-to-match-the-parent-definition-in-class-%s:

Type of %s::$%s must be omitted to match the parent definition in class %s
--------------------------------------------------------------------------
 
.. meta::
	:description:
		Type of %s::$%s must be omitted to match the parent definition in class %s: A property cannot be redefined, by adding the ``mixed`` type to it.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type of %s::$%s must be omitted to match the parent definition in class %s
	:og:description: A property cannot be redefined, by adding the ``mixed`` type to it
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-of-%25s%3A%3A%24%25s-must-be-omitted-to-match-the-parent-definition-in-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type of %s::$%s must be omitted to match the parent definition in class %s
	:twitter:description: Type of %s::$%s must be omitted to match the parent definition in class %s: A property cannot be redefined, by adding the ``mixed`` type to it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-of-%s::$%s-must-be-omitted-to-match-the-parent-definition-in-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-of-%s::$%s-must-be-omitted-to-match-the-parent-definition-in-class-%s.html","name":"Type of %s::$%s must be omitted to match the parent definition in class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 09:34:38 +0000","dateModified":"Fri, 07 Nov 2025 09:34:38 +0000","description":"A property cannot be redefined, by adding the ``mixed`` type to it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-of-%s::$%s-must-be-omitted-to-match-the-parent-definition-in-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A property cannot be redefined, by adding the ``mixed`` type to it. It looks like untyped property and mixed type property should behave the same, but they are not: in particular, typed properties have an 'uninitialized' state, which yields fatal errors when the property is read, which does not apply to untyped properties.

Example
_______

.. code-block:: php

   <?php
   
   class Foo
   {
       public $property;
   }
   
   class Bar extends Foo
   {
       public mixed $property;
   }
   
   ?>


Literal Examples
****************
+ Type of X::$p must be omitted to match the parent definition in class X

Solutions
_________

+ Add the ``mixed`` type to the parent property definition.
+ Remove the ``mixed`` type from the child property definition.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
