.. _must-be-greater-than-0:

must be greater than 0
----------------------
 
.. meta::
	:description:
		must be greater than 0: This error is reported when a parameter is expected to be an integer, strictly positive.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be greater than 0
	:og:description: This error is reported when a parameter is expected to be an integer, strictly positive
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-greater-than-0.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be greater than 0
	:twitter:description: must be greater than 0: This error is reported when a parameter is expected to be an integer, strictly positive
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-greater-than-0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-greater-than-0.html","name":"must be greater than 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 04 Jan 2026 21:16:37 +0000","dateModified":"Sun, 04 Jan 2026 21:16:37 +0000","description":"This error is reported when a parameter is expected to be an integer, strictly positive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-greater-than-0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported when a parameter is expected to be an integer, strictly positive. This is the case with the second argument of str_split().

Example
_______

.. code-block:: php

   <?php
     str_split('abc', 0);
   ?>


Literal Examples
****************
+ str_split(): Argument #2 ($length) must be greater than 0

Solutions
_________

+ Use a valid value for the parameter: a positive and non zero integer, for example 1, 2, 3...

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
