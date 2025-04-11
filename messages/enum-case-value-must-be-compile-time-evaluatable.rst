.. _enum-case-value-must-be-compile-time-evaluatable:

Enum case value must be compile-time evaluatable
------------------------------------------------
 
.. meta::
	:description:
		Enum case value must be compile-time evaluatable: The value of a backed enumeration, string or integer, cannot be build with constant (global or classe).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enum case value must be compile-time evaluatable
	:og:description: The value of a backed enumeration, string or integer, cannot be build with constant (global or classe)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-case-value-must-be-compile-time-evaluatable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enum case value must be compile-time evaluatable
	:twitter:description: Enum case value must be compile-time evaluatable: The value of a backed enumeration, string or integer, cannot be build with constant (global or classe)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-case-value-must-be-compile-time-evaluatable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-case-value-must-be-compile-time-evaluatable.html","name":"Enum case value must be compile-time evaluatable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The value of a backed enumeration, string or integer, cannot be build with constant (global or classe)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum-case-value-must-be-compile-time-evaluatable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The value of a backed enumeration, string or integer, cannot be build with constant (global or classe). It can only be build with literal values. 

This limitation was removed in PHP 8.2.

Example
_______

.. code-block:: php

   <?php
   
   enum Foo: string {
       case A = '/' . A;
       case B = '/' . __FILE__;
   }
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.2.
+ Replace the constants with literal values.
