.. _calling-static-trait-method-%s::%s-is-deprecated:

Calling static trait method %s::%s is deprecated
------------------------------------------------
 
.. meta::
	:description:
		Calling static trait method %s::%s is deprecated: Traits cannot be used independently from a host class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Calling static trait method %s::%s is deprecated
	:og:description: Traits cannot be used independently from a host class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/calling-static-trait-method-%25s%3A%3A%25s-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Calling static trait method %s::%s is deprecated
	:twitter:description: Calling static trait method %s::%s is deprecated: Traits cannot be used independently from a host class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-static-trait-method-%s::%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-static-trait-method-%s::%s-is-deprecated.html","name":"Calling static trait method %s::%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Traits cannot be used independently from a host class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/calling-static-trait-method-%s::%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Traits cannot be used independently from a host class. They must be used inside a class, with the ``use`` keyword. 

Until PHP 8.1, it was possible to call traits without a host class. Since 8.1, calling a trait method is deprecated.

It is also not possible to call a method or a property on a trait.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static function foo() { echo __METHOD__; };
   }
   
   t::foo();
   
   ?>


Literal Examples
****************
+ Calling static trait method T::foo is deprecated

Solutions
_________

+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

Related Error Messages
______________________

+ :ref:`accessing-static-trait-property-%s::$%s-is-deprecated`
+ :ref:`cannot-access-trait-constant-%s::%s-directly`
