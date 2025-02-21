.. _cannot-use-variable-\$%s-twice:

Cannot use variable $%S twice
-----------------------------
 
.. meta::
	:description:
		Cannot use variable $%S twice: The same variable cannt be mentionned twice in the use part of a closure definition.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use variable $%S twice
	:og:description: The same variable cannt be mentionned twice in the use part of a closure definition
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-variable-%24%25s-twice.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use variable $%S twice
	:twitter:description: Cannot use variable $%S twice: The same variable cannt be mentionned twice in the use part of a closure definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-variable-$%s-twice.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-variable-$%s-twice.html","name":"Cannot use variable $%S twice","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The same variable cannt be mentionned twice in the use part of a closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-variable-$%s-twice.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The same variable cannt be mentionned twice in the use part of a closure definition. This would mean the same argument is defined twice, which is useless.

Example
_______

.. code-block:: php

   <?php
   
   $fn = function() use ($a, &$a) {
       $a = 2;
   };
   
   ?>


Literal Examples
****************
+ Cannot use variable $a twice

Solutions
_________

+ Make all variables mentionned in the use expression unique (with or without the reference).
