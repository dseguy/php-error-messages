.. _[]-operator-not-supported-for-strings:

[] operator not supported for strings
-------------------------------------
 
.. meta::
	:description:
		[] operator not supported for strings: Strings and array share the bracket operator for accessing individual elements, but the append operator ``[]`` is not supported for strings.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: [] operator not supported for strings
	:og:description: Strings and array share the bracket operator for accessing individual elements, but the append operator ``[]`` is not supported for strings
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%5B%5D-operator-not-supported-for-strings.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: [] operator not supported for strings
	:twitter:description: [] operator not supported for strings: Strings and array share the bracket operator for accessing individual elements, but the append operator ``[]`` is not supported for strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/[]-operator-not-supported-for-strings.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/[]-operator-not-supported-for-strings.html","name":"[] operator not supported for strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 21:07:03 +0000","dateModified":"Fri, 07 Nov 2025 21:07:03 +0000","description":"Strings and array share the bracket operator for accessing individual elements, but the append operator ``[]`` is not supported for strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/[]-operator-not-supported-for-strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Strings and array share the bracket operator for accessing individual elements, but the append operator ``[]`` is not supported for strings.

Example
_______

.. code-block:: php

   <?php
   
   $string = 'abc';
   $string[] = 'b';
   
   ?>

Solutions
_________

+ Use the ``.`` operator to add a string at the end of another.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
