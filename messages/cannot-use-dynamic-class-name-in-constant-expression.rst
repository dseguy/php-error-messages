.. _cannot-use-dynamic-class-name-in-constant-expression:

Cannot use dynamic class name in constant expression
----------------------------------------------------
 
.. meta::
	:description:
		Cannot use dynamic class name in constant expression: &quot;New in initializers&quot; (PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use dynamic class name in constant expression
	:og:description: &quot;New in initializers&quot; (PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-dynamic-class-name-in-constant-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use dynamic class name in constant expression
	:twitter:description: Cannot use dynamic class name in constant expression: "New in initializers" (PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-class-name-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-class-name-in-constant-expression.html","name":"Cannot use dynamic class name in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:06:56 +0000","dateModified":"Tue, 04 Aug 2026 19:06:56 +0000","description":"\"New in initializers\" (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-class-name-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
"New in initializers" (PHP 8.1) lets new SomeClass(...) appear in constant-expression contexts, such as default parameter values, but only when the class name is written literally, or via self/parent, something resolvable without evaluating an arbitrary expression. A dynamic class name taken from a variable or another expression cannot be resolved once and for all in that fixed, deferred context, so it is rejected at compile time.

Example
_______

.. code-block:: php

   <?php
   
   $className = 'DateTime';
   
   class Bar {
   	public function baz($obj = new $className()) {}
   }
   
   ?>

Solutions
_________

+ Use a literal class name instead of a variable.
+ Move the object creation into the function body instead of the parameter default.

Related Error Messages
______________________

+ :ref:`cannot-use-anonymous-class-in-constant-expression`
+ :ref:`static::-"-is-not-allowed-in-compile-time-constants`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
