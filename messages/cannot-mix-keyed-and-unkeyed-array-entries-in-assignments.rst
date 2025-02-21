.. _cannot-mix-keyed-and-unkeyed-array-entries-in-assignments:

Cannot mix keyed and unkeyed array entries in assignments
---------------------------------------------------------
 
.. meta::
	:description:
		Cannot mix keyed and unkeyed array entries in assignments: list() is a construct that maps an array to a set of variables.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot mix keyed and unkeyed array entries in assignments
	:og:description: list() is a construct that maps an array to a set of variables
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-mix-keyed-and-unkeyed-array-entries-in-assignments.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot mix keyed and unkeyed array entries in assignments
	:twitter:description: Cannot mix keyed and unkeyed array entries in assignments: list() is a construct that maps an array to a set of variables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-mix-keyed-and-unkeyed-array-entries-in-assignments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-mix-keyed-and-unkeyed-array-entries-in-assignments.html","name":"Cannot mix keyed and unkeyed array entries in assignments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"list() is a construct that maps an array to a set of variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-mix-keyed-and-unkeyed-array-entries-in-assignments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
list() is a construct that maps an array to a set of variables. The assignation is done by position, or by key. By position, this means the first value of the array goes to the first variable of the list() : in that case, list() doesn't specify keys with the => operator. On the other hand, the key are matched by their value, and not their position. The error here happens when list() syntax is created with a mixed set of position and key assignations.

Example
_______

.. code-block:: php

   <?php
   
   $array = [];
   
   list(
       '' => $foo,
       $bar
   ) = $array;
   ?>


Literal Examples
****************
+ Cannot mix keyed and unkeyed array entries in assignments

Solutions
_________

+ Remove all the => operators in the list() call.
+ Add all the => operators in the list() call.
+ Make the assignations in a different way.
