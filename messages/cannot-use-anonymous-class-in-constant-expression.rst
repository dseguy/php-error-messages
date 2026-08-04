.. _cannot-use-anonymous-class-in-constant-expression:

Cannot use anonymous class in constant expression
-------------------------------------------------
 
.. meta::
	:description:
		Cannot use anonymous class in constant expression: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use anonymous class in constant expression
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-anonymous-class-in-constant-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use anonymous class in constant expression
	:twitter:description: Cannot use anonymous class in constant expression: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-anonymous-class-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-anonymous-class-in-constant-expression.html","name":"Cannot use anonymous class in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:07:35 +0000","dateModified":"Tue, 04 Aug 2026 19:07:35 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-anonymous-class-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.1's "new in initializers" allows object-creation expressions to appear in constant-expression contexts, such as default parameter values, property defaults, static variables, class constants and attribute arguments, as long as the class being instantiated is fixed and unambiguous. An anonymous class is declared and compiled at the exact spot it is written; allowing one inside a shared, deferred context like a property default would raise questions about when and how often it actually gets declared, so it remains disallowed there.

Example
_______

.. code-block:: php

   <?php
   
   class Foo {
   	public $bar = new class {};
   }
   
   ?>

Solutions
_________

+ Give the class a name, declare it separately, and use new Name(...) in the constant expression instead.

Related Error Messages
______________________

+ :ref:`cannot-use-dynamic-class-name-in-constant-expression`
+ :ref:`static-"-is-not-allowed-in-compile-time-constants`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
