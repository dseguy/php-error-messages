.. _cannot-use-list-as-key-element:

Cannot use list as key element
------------------------------
 
.. meta::
	:description:
		Cannot use list as key element: Since PHP 7.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use list as key element
	:og:description: Since PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-list-as-key-element.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use list as key element
	:twitter:description: Cannot use list as key element: Since PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-list-as-key-element.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-list-as-key-element.html","name":"Cannot use list as key element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:05 +0000","dateModified":"Mon, 27 Jul 2026 16:18:05 +0000","description":"Since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-list-as-key-element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 7.1, ``foreach`` can destructure the value of each entry with ``list()`` (or its short ``[]`` syntax): ``foreach ($array as $key => list($a, $b))``. The key part, on the other hand, is always a single target: a variable, a property, or an array offset. It cannot itself be a ``list()`` pattern, since a single array key has nothing to be destructured into several variables.

Example
_______

.. code-block:: php

   <?php
   
   $array = [['a', 'b'], 'c', 'd'];
   
   foreach ($array as list($key) => $value) {
   }
   
   ?>


Literal Examples
****************
+ Cannot use list as key element

Solutions
_________

+ Use a plain variable for the key, and only destructure the value with ``list()``.

Related Error Messages
______________________

+ :ref:`cannot-use-list()-as-standalone-expression`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
