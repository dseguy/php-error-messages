.. _abstract-property-hook-cannot-have-body:

Abstract property hook cannot have body
---------------------------------------
 
.. meta::
	:description:
		Abstract property hook cannot have body: Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Abstract property hook cannot have body
	:og:description: Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/abstract-property-hook-cannot-have-body.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract property hook cannot have body
	:twitter:description: Abstract property hook cannot have body: Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/abstract-property-hook-cannot-have-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/abstract-property-hook-cannot-have-body.html","name":"Abstract property hook cannot have body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/abstract-property-hook-cannot-have-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition. And, just like methods, abstract property hooks cannot have a body.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public abstract $property {
           get {}
       }
   }
   
   ?>

Solutions
_________

+ Remove the abstract keyword.
+ Remove the body of the property hook.

Related Error Messages
______________________

+ :ref:`non-abstract-property-hook-must-have-a-body`
