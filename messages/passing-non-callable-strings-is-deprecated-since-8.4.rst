.. _passing-non-callable-strings-is-deprecated-since-8.4:

Passing non-callable strings is deprecated since 8.4
----------------------------------------------------
 
.. meta::
	:description:
		Passing non-callable strings is deprecated since 8.4: xml_set_processing_instruction_handler() requires a valid method to be passed.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Passing non-callable strings is deprecated since 8.4
	:og:description: xml_set_processing_instruction_handler() requires a valid method to be passed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/passing-non-callable-strings-is-deprecated-since-8.4.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing non-callable strings is deprecated since 8.4
	:twitter:description: Passing non-callable strings is deprecated since 8.4: xml_set_processing_instruction_handler() requires a valid method to be passed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-non-callable-strings-is-deprecated-since-8.4.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-non-callable-strings-is-deprecated-since-8.4.html","name":"Passing non-callable strings is deprecated since 8.4","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 04 Jan 2026 21:23:44 +0000","dateModified":"Sun, 04 Jan 2026 21:23:44 +0000","description":"xml_set_processing_instruction_handler() requires a valid method to be passed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/passing-non-callable-strings-is-deprecated-since-8.4.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
xml_set_processing_instruction_handler() requires a valid method to be passed. Closure, first class callable, and other callable structures are possible. When using a string, make sure it references an existing function name.

Example
_______

.. code-block:: php

   <?php
   
   // empty string is not a valid callable
   xml_set_processing_instruction_handler($parser, '');
   
   // This cannot be a valid function name
   xml_set_processing_instruction_handler($parser, '123foo');
   
   ?>

Solutions
_________

+ Use a valid function name: non empty string, and a valid name format.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
