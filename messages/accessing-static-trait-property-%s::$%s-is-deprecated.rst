.. _accessing-static-trait-property-%s::\$%s-is-deprecated:

Accessing static trait property %s::$%s is deprecated
-----------------------------------------------------
 
.. meta::
	:description:
		Accessing static trait property %s::$%s is deprecated: Traits cannot be used independently from a host class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Accessing static trait property %s::$%s is deprecated
	:og:description: Traits cannot be used independently from a host class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/accessing-static-trait-property-%25s%3A%3A%24%25s-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Accessing static trait property %s::$%s is deprecated
	:twitter:description: Accessing static trait property %s::$%s is deprecated: Traits cannot be used independently from a host class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/accessing-static-trait-property-%s::$%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/accessing-static-trait-property-%s::$%s-is-deprecated.html","name":"Accessing static trait property %s::$%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Traits cannot be used independently from a host class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/accessing-static-trait-property-%s::$%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Traits cannot be used independently from a host class. They must be used inside a class, with the ``use`` keyword. 

Until PHP 8.1, it was possible to call traits without a host class. Since 8.1, writing or reading properties in a trait is forbidden.

It is also not possible to call a method or a constant on a trait.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
   	public static $t = 1;
   }
   
   echo T::$t;
   
   T::$t = 2;
   
   ?>


Literal Examples
****************
+ Accessing static trait property T::$property is deprecated

Solutions
_________

+ Use the trait in a class and access its features.
+ Convert the trait into a class and access its features.

Related Error Messages
______________________

+ :ref:`calling-static-trait-method-%s::%s-is-deprecated`
+ :ref:`cannot-access-trait-constant-%s::%s-directly`
