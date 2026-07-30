.. _cannot-redefine-class-constant-%s::%s-ce->type-==-zend_internal_class-?-e_core_error-::

Cannot redefine class constant %s::%s ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :
--------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot redefine class constant %s::%s ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redefine class constant %s::%s ce-&gt;type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redefine-class-constant-%25s%3A%3A%25s-ce-%3Etype-%3D%3D-zend_internal_class-%3F-e_core_error-%3A.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redefine class constant %s::%s ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :
	:twitter:description: Cannot redefine class constant %s::%s ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant-%s::%s-ce->type-==-zend_internal_class-?-e_core_error-:.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant-%s::%s-ce->type-==-zend_internal_class-?-e_core_error-:.html","name":"Cannot redefine class constant %s::%s ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:50 +0000","dateModified":"Thu, 30 Jul 2026 07:29:50 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant-%s::%s-ce->type-==-zend_internal_class-?-e_core_error-:.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.3 allows traits to declare their own constants. %s and %s are replaced with the class and constant name involved. When a class composes two traits that each declare a constant of the same name with different values, or when a class or trait tries to redeclare a constant it already inherits with a different value, PHP cannot pick one unambiguously and raises this error; redeclaring a constant is only allowed when every declaration agrees on the exact same value. As with the reserved class constant name, the message's C-ternary tail simply reflects whether the class involved is one registered internally by the engine or an extension (E_CORE_ERROR), or an ordinary user class (E_COMPILE_ERROR).

Example
_______

.. code-block:: php

   <?php
   
   trait T1 {
   	const FOO = 1;
   }
   
   trait T2 {
   	const FOO = 2;
   }
   
   class C {
   	use T1, T2;
   }
   
   ?>

Solutions
_________

+ Rename one of the conflicting constants.
+ Declare the constant explicitly on the class with the intended value; an explicit class-level declaration takes precedence over the traits.
+ Make sure every trait/class that declares the constant uses the exact same value.

Related Error Messages
______________________

+ :ref:`a-class-constant-must-not-be-called-class;-it-is-reserved-for-class-name-fetching-ce->type-==-zend_internal_class-?-e_core_error-:`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
