.. _cannot-assign-to-array(),-use-[]-instead-in-%s:

Cannot assign to array(), use [] instead in %s
----------------------------------------------
 
.. meta::
	:description:
		Cannot assign to array(), use [] instead in %s: The left ``array`` is actualy the ``list`` instruction.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot assign to array(), use [] instead in %s
	:og:description: The left ``array`` is actualy the ``list`` instruction
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-to-array%28%29%2C-use-%5B%5D-instead-in-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot assign to array(), use [] instead in %s
	:twitter:description: Cannot assign to array(), use [] instead in %s: The left ``array`` is actualy the ``list`` instruction
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-to-array(),-use-[]-instead-in-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-to-array(),-use-[]-instead-in-%s.html","name":"Cannot assign to array(), use [] instead in %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 17:43:25 +0000","dateModified":"Thu, 15 Jan 2026 17:43:25 +0000","description":"The left ``array`` is actualy the ``list`` instruction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-assign-to-array(),-use-[]-instead-in-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The left ``array`` is actualy the ``list`` instruction. With that, PHP tries to assign each values of the array on the right to their same position on the left. In this case, there is an array, and it is not possible to assign directly to an array: it could be assigned to an element of that array, just not the whole array.

Example
_______

.. code-block:: php

   <?php
   
   [array($a)] = [array(42)];
   var_dump($a);
   
   ?>

Solutions
_________

+ Remove the array() on the left.
+ Remove the [] on the left.
+ Replace the ``=`` with an ``==`` operator, to convert this into an assignation.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
