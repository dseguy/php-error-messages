.. _is-an-unsupported-rounding-mode:

is an unsupported rounding mode
-------------------------------
 
.. meta::
	:description:
		is an unsupported rounding mode: This error is generated when a rounding error is used with bcround() or the ``BCMath\Number::round()`` method is used.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: is an unsupported rounding mode
	:og:description: This error is generated when a rounding error is used with bcround() or the ``BCMath\Number::round()`` method is used
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/is-an-unsupported-rounding-mode.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is an unsupported rounding mode
	:twitter:description: is an unsupported rounding mode: This error is generated when a rounding error is used with bcround() or the ``BCMath\Number::round()`` method is used
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/is-an-unsupported-rounding-mode.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/is-an-unsupported-rounding-mode.html","name":"is an unsupported rounding mode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 07:09:10 +0000","dateModified":"Thu, 22 Jan 2026 07:09:10 +0000","description":"This error is generated when a rounding error is used with bcround() or the ``BCMath\\Number::round()`` method is used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/is-an-unsupported-rounding-mode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is generated when a rounding error is used with bcround() or the ``BCMath\Number::round()`` method is used.

Example
_______

.. code-block:: php

   

Solutions
_________

+ Check documentation for the valid rounding enumerations.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
