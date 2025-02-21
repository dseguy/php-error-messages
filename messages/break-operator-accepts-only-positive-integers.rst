.. _break-operator-accepts-only-positive-integers:

break operator accepts only positive integers
---------------------------------------------
 
.. meta::
	:description:
		break operator accepts only positive integers: ``break`` indicates the number of nested loop to break from.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: break operator accepts only positive integers
	:og:description: ``break`` indicates the number of nested loop to break from
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/break-operator-accepts-only-positive-integers.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: break operator accepts only positive integers
	:twitter:description: break operator accepts only positive integers: ``break`` indicates the number of nested loop to break from
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/break-operator-accepts-only-positive-integers.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/break-operator-accepts-only-positive-integers.html","name":"break operator accepts only positive integers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``break`` indicates the number of nested loop to break from","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/break-operator-accepts-only-positive-integers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``break`` indicates the number of nested loop to break from. The minimum is 1. 0 would be a no operation, and shall be skipped. Negative numbers or decimals make no sense.

Example
_______

.. code-block:: php

   <?php
   
   $a = [];
   foreach($a as $b) {
       break 0;
       
   }
   
   ?>

Solutions
_________

+ Remove the continue command.
+ Remove the 0.

Related Error Messages
______________________

+ :ref:`continue-operator-accepts-only-positive-integers`
