.. _'%s'-operator-accepts-only-positive-integers:

'%s' operator accepts only positive integers
--------------------------------------------
 
.. meta::
	:description:
		'%s' operator accepts only positive integers: The ``break`` and ``continue`` operators only accepts a positive integer as explicit operand.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: &#039;%s&#039; operator accepts only positive integers
	:og:description: The ``break`` and ``continue`` operators only accepts a positive integer as explicit operand
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%27%25s%27-operator-accepts-only-positive-integers.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: '%s' operator accepts only positive integers
	:twitter:description: '%s' operator accepts only positive integers: The ``break`` and ``continue`` operators only accepts a positive integer as explicit operand
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'%s'-operator-accepts-only-positive-integers.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/'%s'-operator-accepts-only-positive-integers.html","name":"'%s' operator accepts only positive integers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``break`` and ``continue`` operators only accepts a positive integer as explicit operand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/'%s'-operator-accepts-only-positive-integers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``break`` and ``continue`` operators only accepts a positive integer as explicit operand. 

``break`` and ``continue`` exit from the current loop. By default, it only exits the current loop; when a higher number is passed, they also exit the next loops. 

It makes no sense to exit 0 loops (no need for ``break`` then), or a negative number of loop (call a new ``foreach``). Break only works with literal integers, and doesn't compile otherwise.

Example
_______

.. code-block:: php

   <?php
   
   break 1.2;
   
   continue -1;
   
   ?>


Literal Examples
****************
+ 'break' operator accepts only positive integers
+ 'continue' operator accepts only positive integers

Solutions
_________

+ Round the number to the closest integer.
+ Remove the call to break altogether.
+ Move the loop in a separate method, and use return to break out of the loop.
+ Use a goto to jump out of the loop.

Related Error Messages
______________________

+ :ref:`'%s'-operator-with-non-integer-operand`
