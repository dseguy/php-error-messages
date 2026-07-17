.. _cannot-use-dynamic-method-name-in-constant-expression:

Cannot use dynamic method name in constant expression
-----------------------------------------------------
 
.. meta::
	:description:
		Cannot use dynamic method name in constant expression: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use dynamic method name in constant expression
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-dynamic-method-name-in-constant-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use dynamic method name in constant expression
	:twitter:description: Cannot use dynamic method name in constant expression: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-method-name-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-method-name-in-constant-expression.html","name":"Cannot use dynamic method name in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 20:56:03 +0000","dateModified":"Fri, 17 Jul 2026 20:56:03 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-dynamic-method-name-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.5 allows first-class callable syntax (``(...)``) to be used inside a constant expression -- a global constant, a class constant, a static property default, a parameter default value, and so on -- so that a static method can be turned into a ``Closure`` at compile time.

To build that closure, the method name must be resolvable at compile time. Here, the braced expression ``{[1, 2]}`` is not a simple, literal method name: it is an array, which cannot represent a method name at all. Since the compiler cannot fold it down to a plain string, it reports that a dynamic name was used.

This check only applies to static method calls (``X::method(...)``); the equivalent restriction for a plain function name is reported as 'Cannot use dynamic function name in constant expression'. When the braced expression does resolve to a scalar value that simply is not a legal method name (such as an integer), PHP reports 'Illegal method name' instead.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public static function foo() { return 1; }
   }
   
   const C = X::{[1, 2]}(...);
   
   var_dump(C);
   
   ?>

Solutions
_________

+ Use a literal string for the method name.
+ Move the closure creation out of the constant expression, into ordinary code, where dynamic method names are allowed.

Related Error Messages
______________________

+ :ref:`illegal-method-name`
+ :ref:`cannot-use-dynamic-function-name-in-constant-expression`
+ :ref:`illegal-function-name`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `New in PHP 8.5, together with the ability to use first-class callable syntax inside constant expressions. <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/New in PHP 8.5, together with the ability to use first-class callable syntax inside constant expressions..html>`_.
