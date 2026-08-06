.. _class-%s-cannot-use-%s---it-is-not-a-trait:

Class %s cannot use %s - it is not a trait
------------------------------------------
 
.. meta::
	:description:
		Class %s cannot use %s - it is not a trait: This message comes from `zend_class_use_internal_traits()`, an internal engine API added to let a C extension attach traits to a class entry it registers, outside of the regular ``use`` statement compiled from PHP source (support for traits on internal classes was added late in the PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot use %s - it is not a trait
	:og:description: This message comes from `zend_class_use_internal_traits()`, an internal engine API added to let a C extension attach traits to a class entry it registers, outside of the regular ``use`` statement compiled from PHP source (support for traits on internal classes was added late in the PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-use-%25s---it-is-not-a-trait.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot use %s - it is not a trait
	:twitter:description: Class %s cannot use %s - it is not a trait: This message comes from `zend_class_use_internal_traits()`, an internal engine API added to let a C extension attach traits to a class entry it registers, outside of the regular ``use`` statement compiled from PHP source (support for traits on internal classes was added late in the PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-use-%s---it-is-not-a-trait.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-use-%s---it-is-not-a-trait.html","name":"Class %s cannot use %s - it is not a trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:26:31 +0000","dateModified":"Thu, 06 Aug 2026 13:26:31 +0000","description":"This message comes from `zend_class_use_internal_traits()`, an internal engine API added to let a C extension attach traits to a class entry it registers, outside of the regular ``use`` statement compiled from PHP source (support for traits on internal classes was added late in the PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-use-%s---it-is-not-a-trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This message comes from `zend_class_use_internal_traits()`, an internal engine API added to let a C extension attach traits to a class entry it registers, outside of the regular ``use`` statement compiled from PHP source (support for traits on internal classes was added late in the PHP 8.6 development cycle). It fires when one of the class entries passed in is not actually a trait.

There is no PHP userland API that reaches this function, so ordinary application code cannot trigger it; it can only show up as the result of a bug in an extension that registers its own classes and passes the wrong class entry as a trait.

The near-identical runtime message, ``%s cannot use %s - it is not a trait`` (without the leading word ``Class``), is the one produced by an ordinary ``use TraitName;`` inside a PHP class body when ``TraitName`` refers to something other than a trait, such as an interface or an ordinary class.

Example
_______

.. code-block:: php

   <?php
   
   enum Color {
       case Red;
   }
   
   class X {
       use Color;
   }
   
   ?>


Literal Examples
****************
+ x cannot use Color - it is not a trait

Solutions
_________

+ If this appears while developing a PHP extension, check the class entries passed to `zend_class_use_internal_traits()` and make sure each one was registered with `ZEND_ACC_TRAIT`.
+ If this appears while using a third-party extension, report the issue to its maintainer, since it points to a bug in the extension rather than in the PHP script.

Related Error Messages
______________________

+ :ref:`%s-cannot-use-%s---it-is-not-a-trait`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
