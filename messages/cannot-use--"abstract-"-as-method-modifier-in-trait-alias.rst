.. _cannot-use--"abstract-"-as-method-modifier-in-trait-alias:

Cannot use \"abstract\" as method modifier in trait alias
---------------------------------------------------------
 
.. meta::
	:description:
		Cannot use \"abstract\" as method modifier in trait alias: The ``as`` clause of a trait ``use`` statement can rename a method, and change its visibility (``public``, ``protected``, ``private``), and, since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;abstract\&quot; as method modifier in trait alias
	:og:description: The ``as`` clause of a trait ``use`` statement can rename a method, and change its visibility (``public``, ``protected``, ``private``), and, since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22abstract-%22-as-method-modifier-in-trait-alias.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"abstract\" as method modifier in trait alias
	:twitter:description: Cannot use \"abstract\" as method modifier in trait alias: The ``as`` clause of a trait ``use`` statement can rename a method, and change its visibility (``public``, ``protected``, ``private``), and, since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"abstract-\"-as-method-modifier-in-trait-alias.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"abstract-\"-as-method-modifier-in-trait-alias.html","name":"Cannot use \\\"abstract\\\" as method modifier in trait alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 16:20:13 +0000","dateModified":"Wed, 05 Aug 2026 16:20:13 +0000","description":"The ``as`` clause of a trait ``use`` statement can rename a method, and change its visibility (``public``, ``protected``, ``private``), and, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"abstract-\"-as-method-modifier-in-trait-alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``as`` clause of a trait ``use`` statement can rename a method, and change its visibility (``public``, ``protected``, ``private``), and, since PHP 8.3, mark it ``final``. It cannot mark the alias ``abstract``, nor ``static``: an alias only renames an existing, concrete method brought in by the trait, it does not declare a new one, so these modifiers make no sense in this context.

This is a compile time check, independent of the class that uses the trait.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
       public function foo() {}
   }
   
   class X {
       use T {
           foo as abstract bar;
       }
   }
   
   ?>

Solutions
_________

+ Remove the ``abstract`` modifier from the trait alias.
+ Declare an actual abstract method, in the class or in an interface, instead of trying to alias the trait method as abstract.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
