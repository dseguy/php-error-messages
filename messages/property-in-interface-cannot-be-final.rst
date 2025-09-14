.. _property-in-interface-cannot-be-final:

Property in interface cannot be final
-------------------------------------
 
.. meta::
	:description:
		Property in interface cannot be final: While PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property in interface cannot be final
	:og:description: While PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-in-interface-cannot-be-final.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property in interface cannot be final
	:twitter:description: Property in interface cannot be final: While PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-final.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-final.html","name":"Property in interface cannot be final","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 13 Sep 2025 09:49:43 +0000","dateModified":"Sat, 13 Sep 2025 09:49:43 +0000","description":"While PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-final.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
While PHP 8.4 supports properties in an interface, as long as they are defining hooks, it is not possible to use the ``final`` option: in fact, the property hook does not have a body, so there is no code to finalize.

Example
_______

.. code-block:: php

   <?php
   
   interface i {
       final $p { get; }
   }
   
   ?>

Solutions
_________

+ Remove the ``final`` option.
+ Move the property definition to an abstract class.
