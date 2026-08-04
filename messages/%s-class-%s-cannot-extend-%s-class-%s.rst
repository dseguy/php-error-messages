.. _%s-class-%s-cannot-extend-%s-class-%s:

%s class %s cannot extend %s class %s
-------------------------------------
 
.. meta::
	:description:
		%s class %s cannot extend %s class %s: This is the generic form of the error emitted when a ``readonly`` class and a non-``readonly`` class try to extend one another: the first two ``%s`` are ``Readonly``/``Non-readonly`` plus the child class name, the last two are ``readonly``/``non-readonly`` plus the parent class name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s class %s cannot extend %s class %s
	:og:description: This is the generic form of the error emitted when a ``readonly`` class and a non-``readonly`` class try to extend one another: the first two ``%s`` are ``Readonly``/``Non-readonly`` plus the child class name, the last two are ``readonly``/``non-readonly`` plus the parent class name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-class-%25s-cannot-extend-%25s-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s class %s cannot extend %s class %s
	:twitter:description: %s class %s cannot extend %s class %s: This is the generic form of the error emitted when a ``readonly`` class and a non-``readonly`` class try to extend one another: the first two ``%s`` are ``Readonly``/``Non-readonly`` plus the child class name, the last two are ``readonly``/``non-readonly`` plus the parent class name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-class-%s-cannot-extend-%s-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-class-%s-cannot-extend-%s-class-%s.html","name":"%s class %s cannot extend %s class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 14:20:33 +0000","dateModified":"Tue, 04 Aug 2026 14:20:33 +0000","description":"This is the generic form of the error emitted when a ``readonly`` class and a non-``readonly`` class try to extend one another: the first two ``%s`` are ``Readonly``\/``Non-readonly`` plus the child class name, the last two are ``readonly``\/``non-readonly`` plus the parent class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-class-%s-cannot-extend-%s-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is the generic form of the error emitted when a ``readonly`` class and a non-``readonly`` class try to extend one another: the first two ``%s`` are ``Readonly``/``Non-readonly`` plus the child class name, the last two are ``readonly``/``non-readonly`` plus the parent class name.

``readonly`` is a class-wide modifier: it applies to every property declared in the class. Because a subclass inherits all of its parent's properties, mixing a ``readonly`` class with a non-``readonly`` one in the same hierarchy would leave some properties ambiguous about whether they can be written to after construction. PHP forbids this by requiring every class in an inheritance chain to share the same ``readonly`` status.

Example
_______

.. code-block:: php

   <?php
   
   readonly class Foo
   {
   }
   
   class Bar extends Foo
   {
   }
   
   ?>


Literal Examples
****************
+ Readonly class Bar cannot extend non-readonly class Foo
+ Non-readonly class Bar cannot extend readonly class Foo

Solutions
_________

+ Make both classes readonly.
+ Make both classes non-readonly.
+ Make both classes non-readonly and apply readonly per property instead.

Related Error Messages
______________________

+ :ref:`readonly-class-%s-cannot-extend-non-readonly-class-%s`
+ :ref:`non-readonly-class-%s-cannot-extend-readonly-class-%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
