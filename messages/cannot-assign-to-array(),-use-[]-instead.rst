.. _cannot-assign-to-array(),-use-[]-instead:

Cannot assign to array(), use [] instead
----------------------------------------
 
.. meta::
	:description:
		Cannot assign to array(), use [] instead: array(.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot assign to array(), use [] instead
	:og:description: array(
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-to-array%28%29%2C-use-%5B%5D-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot assign to array(), use [] instead
	:twitter:description: Cannot assign to array(), use [] instead: array(
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-to-array(),-use-[]-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-to-array(),-use-[]-instead.html","name":"Cannot assign to array(), use [] instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:30 +0000","dateModified":"Thu, 30 Jul 2026 07:29:30 +0000","description":"array(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-assign-to-array(),-use-[]-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
array(...) is a language construct that builds a new array value; it does not designate a destructurable container the way list(...) or the short [...] syntax do, so it can never appear on the left-hand side of an assignment. This dedicated error exists to catch the common mistake of typing array(...) where list(...) was meant, and points directly to the short-syntax alternative.

Example
_______

.. code-block:: php

   <?php
   
   $data = [1, 2];
   array($a, $b) = $data;
   
   ?>

Solutions
_________

+ Use list(): list($a, $b) = $data;
+ Use the short destructuring syntax: [$a, $b] = $data;

Related Error Messages
______________________

+ :ref:`cannot-mix-[]-and-list()`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
