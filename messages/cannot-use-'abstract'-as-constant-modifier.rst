.. _cannot-use-'abstract'-as-constant-modifier:

Cannot use 'abstract' as constant modifier
------------------------------------------
 
.. meta::
	:description:
		Cannot use 'abstract' as constant modifier: ``abstract`` is an option for methods, and it is not available for class constants, properties or enumeration cases.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &#039;abstract&#039; as constant modifier
	:og:description: ``abstract`` is an option for methods, and it is not available for class constants, properties or enumeration cases
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27abstract%27-as-constant-modifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use 'abstract' as constant modifier
	:twitter:description: Cannot use 'abstract' as constant modifier: ``abstract`` is an option for methods, and it is not available for class constants, properties or enumeration cases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'abstract'-as-constant-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'abstract'-as-constant-modifier.html","name":"Cannot use 'abstract' as constant modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Apr 2025 20:33:38 +0000","dateModified":"Thu, 10 Apr 2025 20:33:38 +0000","description":"``abstract`` is an option for methods, and it is not available for class constants, properties or enumeration cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'abstract'-as-constant-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``abstract`` is an option for methods, and it is not available for class constants, properties or enumeration cases.

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
