.. _cannot-use-%s-as-array:

Cannot use %s as array
----------------------
 
.. meta::
	:description:
		Cannot use %s as array: This error is emitted when the right operand of a ``list`` operation is not an array, but a scalar, with the exception of ``null``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use %s as array
	:og:description: This error is emitted when the right operand of a ``list`` operation is not an array, but a scalar, with the exception of ``null``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-array.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use %s as array
	:twitter:description: Cannot use %s as array: This error is emitted when the right operand of a ``list`` operation is not an array, but a scalar, with the exception of ``null``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-array.html","name":"Cannot use %s as array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Nov 2025 06:04:55 +0000","dateModified":"Tue, 04 Nov 2025 06:04:55 +0000","description":"This error is emitted when the right operand of a ``list`` operation is not an array, but a scalar, with the exception of ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when the right operand of a ``list`` operation is not an array, but a scalar, with the exception of ``null``.

Example
_______

.. code-block:: php

   <?php
   
   list($a, $b) = 'abc';
   
   ?>


Literal Examples
****************
+ Cannot use string as array
+ Cannot use boolean as array
+ Cannot use integer as array
+ Cannot use float as array
+ Cannot use object as array

Solutions
_________

+ Convert the right operand to an array first.
+ Use a simple assignation, rather than ``list``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `destructuringNonArray <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/destructuringNonArray.html>`_.
