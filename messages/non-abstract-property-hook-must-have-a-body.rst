.. _non-abstract-property-hook-must-have-a-body:

Non-abstract property hook must have a body
-------------------------------------------
 
.. meta::
	:description:
		Non-abstract property hook must have a body: Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Non-abstract property hook must have a body
	:og:description: Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/non-abstract-property-hook-must-have-a-body.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-abstract property hook must have a body
	:twitter:description: Non-abstract property hook must have a body: Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-abstract-property-hook-must-have-a-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/non-abstract-property-hook-must-have-a-body.html","name":"Non-abstract property hook must have a body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/non-abstract-property-hook-must-have-a-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon. And, just like methods, property hooks must use the ``abstract`` property, although the property definition has to support the option, not the property hook itself.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	// error : property hook must have a body
       public $property {
           get;
       }
   
       public abstract $abstractProperty {
           get;
       }
   }
   
   ?>

Solutions
_________

+ Add a body to the property hook.
+ Add the abstract keyword to the property definition.

Related Error Messages
______________________

+ :ref:`abstract-property-hook-cannot-have-body`
