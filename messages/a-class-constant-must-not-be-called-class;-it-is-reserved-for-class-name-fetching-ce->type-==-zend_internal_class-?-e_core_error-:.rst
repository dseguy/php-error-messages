.. _a-class-constant-must-not-be-called-class;-it-is-reserved-for-class-name-fetching-ce->type-==-zend_internal_class-?-e_core_error-::

A class constant must not be called class; it is reserved for class name fetching ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :
----------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		A class constant must not be called class; it is reserved for class name fetching ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :: class is a reserved pseudo-constant name: writing Foo::class already resolves, at compile time, to the fully-qualified name of Foo without ever looking up a real constant.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A class constant must not be called class; it is reserved for class name fetching ce-&gt;type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :
	:og:description: class is a reserved pseudo-constant name: writing Foo::class already resolves, at compile time, to the fully-qualified name of Foo without ever looking up a real constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-class-constant-must-not-be-called-class%3B-it-is-reserved-for-class-name-fetching-ce-%3Etype-%3D%3D-zend_internal_class-%3F-e_core_error-%3A.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A class constant must not be called class; it is reserved for class name fetching ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :
	:twitter:description: A class constant must not be called class; it is reserved for class name fetching ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :: class is a reserved pseudo-constant name: writing Foo::class already resolves, at compile time, to the fully-qualified name of Foo without ever looking up a real constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-class-constant-must-not-be-called-class;-it-is-reserved-for-class-name-fetching-ce->type-==-zend_internal_class-?-e_core_error-:.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-class-constant-must-not-be-called-class;-it-is-reserved-for-class-name-fetching-ce->type-==-zend_internal_class-?-e_core_error-:.html","name":"A class constant must not be called class; it is reserved for class name fetching ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:30 +0000","dateModified":"Thu, 30 Jul 2026 07:29:30 +0000","description":"class is a reserved pseudo-constant name: writing Foo::class already resolves, at compile time, to the fully-qualified name of Foo without ever looking up a real constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-class-constant-must-not-be-called-class;-it-is-reserved-for-class-name-fetching-ce->type-==-zend_internal_class-?-e_core_error-:.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
class is a reserved pseudo-constant name: writing Foo::class already resolves, at compile time, to the fully-qualified name of Foo without ever looking up a real constant. Declaring an actual class constant named class would collide with that built-in mechanism, so it is forbidden. The message's noisy tail (ce->type == ZEND_INTERNAL_CLASS ? E_CORE_ERROR :) is an artifact of the C ternary Zend uses internally to pick between E_CORE_ERROR, for constants declared on classes registered by the engine or an extension, and E_COMPILE_ERROR for constants declared in ordinary user scripts.

Example
_______

.. code-block:: php

   <?php
   
   class Foo {
   	const class = 'Foo';
   }
   
   ?>

Solutions
_________

+ Use a different name for the constant.

Related Error Messages
______________________

+ :ref:`cannot-redefine-class-constant-%s::%s-ce->type-==-zend_internal_class-?-e_core_error-:`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
