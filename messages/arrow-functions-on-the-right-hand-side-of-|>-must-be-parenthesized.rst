.. _arrow-functions-on-the-right-hand-side-of-|>-must-be-parenthesized:

Arrow functions on the right hand side of |> must be parenthesized
------------------------------------------------------------------
 
.. meta::
	:description:
		Arrow functions on the right hand side of |> must be parenthesized: The pipe operator accepts many variants of closures, such as closures, callable, arrays and first class callables.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Arrow functions on the right hand side of |&gt; must be parenthesized
	:og:description: The pipe operator accepts many variants of closures, such as closures, callable, arrays and first class callables
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/arrow-functions-on-the-right-hand-side-of-%7C%3E-must-be-parenthesized.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arrow functions on the right hand side of |> must be parenthesized
	:twitter:description: Arrow functions on the right hand side of |> must be parenthesized: The pipe operator accepts many variants of closures, such as closures, callable, arrays and first class callables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/arrow-functions-on-the-right-hand-side-of-|>-must-be-parenthesized.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/arrow-functions-on-the-right-hand-side-of-|>-must-be-parenthesized.html","name":"Arrow functions on the right hand side of |> must be parenthesized","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Nov 2025 18:32:17 +0000","dateModified":"Wed, 05 Nov 2025 18:32:17 +0000","description":"The pipe operator accepts many variants of closures, such as closures, callable, arrays and first class callables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/arrow-functions-on-the-right-hand-side-of-|>-must-be-parenthesized.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The pipe operator accepts many variants of closures, such as closures, callable, arrays and first class callables. Yet, it doesn't accept direct arrow functions: they must be placed inside parenthesis. This ensures the parser knows when to finish the returned expression, which might also include another pipe operator.

Example
_______

.. code-block:: php

   <?php
   <?php
   
   echo 'a' |> fn($a) => 1;
   
   ?>

Solutions
_________

+ Use a closure.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
