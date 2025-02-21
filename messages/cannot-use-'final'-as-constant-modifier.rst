.. _cannot-use-'final'-as-constant-modifier:

Cannot use 'final' as constant modifier
---------------------------------------
 
.. meta::
	:description:
		Cannot use 'final' as constant modifier: ``final`` is an option for methods, and it is not available for class constants and properties.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &#039;final&#039; as constant modifier
	:og:description: ``final`` is an option for methods, and it is not available for class constants and properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27final%27-as-constant-modifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use 'final' as constant modifier
	:twitter:description: Cannot use 'final' as constant modifier: ``final`` is an option for methods, and it is not available for class constants and properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'final'-as-constant-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'final'-as-constant-modifier.html","name":"Cannot use 'final' as constant modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``final`` is an option for methods, and it is not available for class constants and properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'final'-as-constant-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``final`` is an option for methods, and it is not available for class constants and properties. It becomes a feature with class constants in PHP 8.0.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private static const A  = 1;
   }
   
   ?>

Solutions
_________

+ Remove the option from the constant signature.


In more recent PHP versions, this error message is now :ref:`cannot-use-the-%s-modifier-on-a-%s`.
