.. _nesting-level-too-deep---recursive-dependency?:

Nesting level too deep - recursive dependency?
----------------------------------------------
 
.. meta::
	:description:
		Nesting level too deep - recursive dependency?: PHP comparison may be recursive: it happens when an array contains a reference to another element of itself.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Nesting level too deep - recursive dependency?
	:og:description: PHP comparison may be recursive: it happens when an array contains a reference to another element of itself
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/nesting-level-too-deep---recursive-dependency%3F.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nesting level too deep - recursive dependency?
	:twitter:description: Nesting level too deep - recursive dependency?: PHP comparison may be recursive: it happens when an array contains a reference to another element of itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/nesting-level-too-deep---recursive-dependency?.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/nesting-level-too-deep---recursive-dependency?.html","name":"Nesting level too deep - recursive dependency?","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"PHP comparison may be recursive: it happens when an array contains a reference to another element of itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/nesting-level-too-deep---recursive-dependency?.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP comparison may be recursive: it happens when an array contains a reference to another element of itself. In that case, the array becomes recursive: traversing such array may end up with an infinite loop, as the reference may loop back on itself.

This error message applies to array comparisons, and count(). There might be other situations where this applies.

Example
_______

.. code-block:: php

   <?php
   
   $a = [1, 5=> &$a];
   $b = [1, 5=> &$b];
   
   try {
       var_dump($a === $b);
   } catch (Error $e) {
       print caught\n;
   }
   
   // count() doesn't handle recursive arrays
   count($a);
   
   ?>

Solutions
_________

+ Do not make direct comparisons of recursive arrays.
+ Do not try to count recursive arrays.
