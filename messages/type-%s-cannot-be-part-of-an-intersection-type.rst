.. _type-%s-cannot-be-part-of-an-intersection-type:

Type %s cannot be part of an intersection type
----------------------------------------------
 
.. meta::
	:description:
		Type %s cannot be part of an intersection type: An intersection type, like ``string&amp;Iterator``, requires a value to be an instance of every listed type at once.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type %s cannot be part of an intersection type
	:og:description: An intersection type, like ``string&amp;Iterator``, requires a value to be an instance of every listed type at once
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-%25s-cannot-be-part-of-an-intersection-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type %s cannot be part of an intersection type
	:twitter:description: Type %s cannot be part of an intersection type: An intersection type, like ``string&Iterator``, requires a value to be an instance of every listed type at once
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-cannot-be-part-of-an-intersection-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-cannot-be-part-of-an-intersection-type.html","name":"Type %s cannot be part of an intersection type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:35 +0000","dateModified":"Mon, 27 Jul 2026 16:18:35 +0000","description":"An intersection type, like ``string&Iterator``, requires a value to be an instance of every listed type at once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-%s-cannot-be-part-of-an-intersection-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An intersection type, like ``string&Iterator``, requires a value to be an instance of every listed type at once. That is only meaningful for class and interface names: a value can implement several interfaces simultaneously.

Scalar and compound pseudo-types (``int``, ``float``, ``string``, ``bool``, ``array``, ``callable``, ``iterable``, ``mixed``, ``void``, ``never``, ``null``, ``false``, ``true``), as well as ``self``, ``parent`` and ``static``, cannot be combined into an intersection, since nothing can be, for instance, a ``string`` and an object implementing ``Iterator`` at the same time.

Example
_______

.. code-block:: php

   <?php
   
   function foo(): string&Iterator {}
   
   ?>


Literal Examples
****************
+ Type string cannot be part of an intersection type

Solutions
_________

+ Remove the scalar or pseudo-type from the intersection, and keep only class or interface names.
+ Use a union type (``|``) instead, if any of the alternatives is acceptable.

Related Error Messages
______________________

+ :ref:`type-%s-contains-both-object-and-a-class-type`
+ :ref:`duplicate-type-%s-is-redundant`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
