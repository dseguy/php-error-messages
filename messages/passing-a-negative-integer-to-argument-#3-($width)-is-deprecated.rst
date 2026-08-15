.. _passing-a-negative-integer-to-argument-#3-(\$width)-is-deprecated:

passing a negative integer to argument #3 ($width) is deprecated
----------------------------------------------------------------
 
.. meta::
	:description:
		passing a negative integer to argument #3 ($width) is deprecated: ``mb_strimwidth()`` trims a string to a given display width.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: passing a negative integer to argument #3 ($width) is deprecated
	:og:description: ``mb_strimwidth()`` trims a string to a given display width
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/passing-a-negative-integer-to-argument-%233-%28%24width%29-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: passing a negative integer to argument #3 ($width) is deprecated
	:twitter:description: passing a negative integer to argument #3 ($width) is deprecated: ``mb_strimwidth()`` trims a string to a given display width
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-a-negative-integer-to-argument-#3-($width)-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-a-negative-integer-to-argument-#3-($width)-is-deprecated.html","name":"passing a negative integer to argument #3 ($width) is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:12 +0000","dateModified":"Tue, 11 Aug 2026 20:55:12 +0000","description":"``mb_strimwidth()`` trims a string to a given display width","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/passing-a-negative-integer-to-argument-#3-($width)-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``mb_strimwidth()`` trims a string to a given display width. Its ``$width`` argument used to accept negative values, in which case the width was measured from the end of the string instead of from ``$start``.

A review of public code found essentially no real-world usage of a negative ``$width``, and the feature made the function's behavior harder to reason about for little benefit. As of PHP 8.3.0, passing a negative integer for this argument is deprecated.

Example
_______

.. code-block:: php

   <?php
   
   echo mb_strimwidth('Hello world', 0, -5, '...');
   
   ?>

Solutions
_________

+ Compute the trimmed width explicitly (e.g. using ``mb_strwidth()``) and pass a positive value to ``mb_strimwidth()``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `mb_strimwidth <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_strimwidth.html>`_.
