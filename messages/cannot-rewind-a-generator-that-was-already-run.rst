.. _cannot-rewind-a-generator-that-was-already-run:

Cannot rewind a generator that was already run
----------------------------------------------
 
.. meta::
	:description:
		Cannot rewind a generator that was already run: In this code, ``$g`` includes the generator, and it is run twice, from the first loop in $h, and then, in the second loop with $i.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot rewind a generator that was already run
	:og:description: In this code, ``$g`` includes the generator, and it is run twice, from the first loop in $h, and then, in the second loop with $i
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-rewind-a-generator-that-was-already-run.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot rewind a generator that was already run
	:twitter:description: Cannot rewind a generator that was already run: In this code, ``$g`` includes the generator, and it is run twice, from the first loop in $h, and then, in the second loop with $i
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rewind-a-generator-that-was-already-run.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rewind-a-generator-that-was-already-run.html","name":"Cannot rewind a generator that was already run","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 21:12:10 +0000","dateModified":"Tue, 26 May 2026 21:12:10 +0000","description":"In this code, ``$g`` includes the generator, and it is run twice, from the first loop in $h, and then, in the second loop with $i","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-rewind-a-generator-that-was-already-run.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In this code, ``$g`` includes the generator, and it is run twice, from the first loop in $h, and then, in the second loop with $i.

Example
_______

.. code-block:: php

   <?php
   
   $g = function (): Generator {
       yield from [1,2,3,4];
   };    echo $i +;
   
   $g = $g();
   
   foreach($g as $h) {
       print h:$h -;
       foreach($g as $i) {
           echo i:$i +;
           
           break 1;
       }
   }
   
   ?>

Solutions
_________

+ Do not reuse the generator in two loops, but rather call ``$g()`` each time. It generates distinct and new data sources.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
