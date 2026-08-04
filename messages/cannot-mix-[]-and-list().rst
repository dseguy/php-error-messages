.. _cannot-mix-[]-and-list():

Cannot mix [] and list()
------------------------
 
.. meta::
	:description:
		Cannot mix [] and list(): list() and the short [] syntax are two different notations for exactly the same destructuring construct.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot mix [] and list()
	:og:description: list() and the short [] syntax are two different notations for exactly the same destructuring construct
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-mix-%5B%5D-and-list%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot mix [] and list()
	:twitter:description: Cannot mix [] and list(): list() and the short [] syntax are two different notations for exactly the same destructuring construct
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-mix-[]-and-list().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-mix-[]-and-list().html","name":"Cannot mix [] and list()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:02:26 +0000","dateModified":"Tue, 04 Aug 2026 19:02:26 +0000","description":"list() and the short [] syntax are two different notations for exactly the same destructuring construct","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-mix-[]-and-list().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
list() and the short [] syntax are two different notations for exactly the same destructuring construct. PHP requires a single destructuring expression to use one notation consistently at every nesting level; using list() for the outer pattern and [] for a nested one, or the other way around, is rejected at compile time even though each form is individually valid.

Example
_______

.. code-block:: php

   <?php
   
   $data = [1, [2, 3]];
   
   list($a, [$b, $c]) = $data;
   
   ?>

Solutions
_________

+ Use list() consistently at every level: list($a, list($b, $c)) = $data;
+ Use the short [] syntax consistently at every level: [$a, [$b, $c]] = $data;

Related Error Messages
______________________

+ :ref:`cannot-assign-to-array(),-use-[]-instead`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
