.. _cannot-use--"yield-from-"-inside-a-by-reference-generator:

Cannot use \"yield from\" inside a by-reference generator
---------------------------------------------------------
 
.. meta::
	:description:
		Cannot use \"yield from\" inside a by-reference generator: ``yield from`` only emit data by value, not by reference.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;yield from\&quot; inside a by-reference generator
	:og:description: ``yield from`` only emit data by value, not by reference
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22yield-from-%22-inside-a-by-reference-generator.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"yield from\" inside a by-reference generator
	:twitter:description: Cannot use \"yield from\" inside a by-reference generator: ``yield from`` only emit data by value, not by reference
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"yield-from-\"-inside-a-by-reference-generator.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"yield-from-\"-inside-a-by-reference-generator.html","name":"Cannot use \\\"yield from\\\" inside a by-reference generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Mar 2026 22:30:49 +0000","dateModified":"Fri, 06 Mar 2026 22:30:49 +0000","description":"``yield from`` only emit data by value, not by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"yield-from-\"-inside-a-by-reference-generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``yield from`` only emit data by value, not by reference.

Example
_______

.. code-block:: php

   <?php
   
   function &foo() {
       yield from [1,2,3];
   }
   
   ?>

Solutions
_________

+ Remove the reference sign from the function signature.
+ Refactor the code to use ``yield`` instead.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
