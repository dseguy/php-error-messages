.. _cannot-use-'readonly'-as-%s-modifier:

Cannot use 'readonly' as %s modifier
------------------------------------
 
.. meta::
	:description:
		Cannot use 'readonly' as %s modifier: ``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &#039;readonly&#039; as %s modifier
	:og:description: ``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%27readonly%27-as-%25s-modifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use 'readonly' as %s modifier
	:twitter:description: Cannot use 'readonly' as %s modifier: ``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'readonly'-as-%s-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-'readonly'-as-%s-modifier.html","name":"Cannot use 'readonly' as %s modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Apr 2025 20:30:58 +0000","dateModified":"Thu, 10 Apr 2025 20:30:58 +0000","description":"``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-'readonly'-as-%s-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       readonly function foo() {}
   }
   
   ?>


Literal Examples
****************
+ Cannot use \'readonly\' as method modifier
+ Cannot use \'readonly\' as constant modifier
+ Cannot use \'readonly\' as constant modifier

Solutions
_________

+ Remove the ``readonly`` option from the method signature.
