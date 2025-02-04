.. _traits-cannot-have-constants:

Traits cannot have constants
----------------------------
 
.. meta::
	:description:
		Traits cannot have constants: Constants int traits were added in PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Traits cannot have constants
	:og:description: Constants int traits were added in PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/traits-cannot-have-constants.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Traits cannot have constants
	:twitter:description: Traits cannot have constants: Constants int traits were added in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/traits-cannot-have-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/traits-cannot-have-constants.html","name":"Traits cannot have constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Feb 2025 17:30:39 +0000","dateModified":"Tue, 04 Feb 2025 17:30:39 +0000","description":"Constants int traits were added in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/traits-cannot-have-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Constants int traits were added in PHP 8.2. Until then, they were not allowed: at compile time this error was yield.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
       const X = 1;
   }
   
   echo T::X;
   
   ?>

Solutions
_________

+ Put the constant in the host class.
+ Put the constant in an interface.
+ Do not use the constant.
+ Move to PHP 8.2 or later.

Related Error Messages
______________________

+ :ref:`cannot-access-trait-constant-%s::%s-directly`


In more recent PHP versions, this error message is now :ref:`cannot-access-trait-constant-%s::%s-directly`.
