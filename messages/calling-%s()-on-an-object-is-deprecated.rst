.. _calling-%s()-on-an-object-is-deprecated:

Calling %s() on an object is deprecated
---------------------------------------
 
.. meta::
	:description:
		Calling %s() on an object is deprecated: ``prev()``, ``current()``, ``next()`` and ``reset()`` where php native functions used to navigate in arrays.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Calling %s() on an object is deprecated
	:og:description: ``prev()``, ``current()``, ``next()`` and ``reset()`` where php native functions used to navigate in arrays
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/calling-%25s%28%29-on-an-object-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Calling %s() on an object is deprecated
	:twitter:description: Calling %s() on an object is deprecated: ``prev()``, ``current()``, ``next()`` and ``reset()`` where php native functions used to navigate in arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-%s()-on-an-object-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-%s()-on-an-object-is-deprecated.html","name":"Calling %s() on an object is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Sep 2025 04:57:17 +0000","dateModified":"Thu, 18 Sep 2025 04:57:17 +0000","description":"``prev()``, ``current()``, ``next()`` and ``reset()`` where php native functions used to navigate in arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/calling-%s()-on-an-object-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``prev()``, ``current()``, ``next()`` and ``reset()`` where php native functions used to navigate in arrays. They also applied to objects, although this is an accidental feature. Nowadays, using object with these functions is deprecated.

Example
_______

.. code-block:: php

   <?php
   
   $object = (object) ['a' => 1];
   
   echo current($object);
   
   ?>


Literal Examples
****************
+ Calling prev() on an object is deprecated
+ Calling next() on an object is deprecated
+ Calling reset() on an object is deprecated
+ Calling current() on an object is deprecated

Solutions
_________

+ Cast the object to an array, and store it in a variable before using the mentioned functions.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `passingObjectIsDeprecated <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/passingObjectIsDeprecated.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.
