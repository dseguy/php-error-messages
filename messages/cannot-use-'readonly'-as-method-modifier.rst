.. _cannot-use-'readonly'-as-method-modifier:

Cannot use 'readonly' as method modifier
----------------------------------------
 
.. meta::
	:description:
		Cannot use 'readonly' as method modifier: ``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &#039;readonly&#039; as method modifier
	:og:description: ``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27readonly%27-as-method-modifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use 'readonly' as method modifier
	:twitter:description: Cannot use 'readonly' as method modifier: ``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'readonly'-as-method-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'readonly'-as-method-modifier.html","name":"Cannot use 'readonly' as method modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Apr 2025 20:31:13 +0000","dateModified":"Thu, 10 Apr 2025 20:31:13 +0000","description":"``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'readonly'-as-method-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private readonly function foo() {}
   }
   
   ?>

Solutions
_________

+ Remove the option from the method signature.

Related Error Messages
______________________

+ :ref:`cannot-use-'abstract'-as-method-modifier`
+ :ref:`cannot-use-'final'-as-method-modifier`
+ :ref:`cannot-use-'static'-as-method-modifier`
