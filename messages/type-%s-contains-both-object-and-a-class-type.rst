.. _type-%s-contains-both-object-and-a-class-type:

Type %s contains both object and a class type
---------------------------------------------
 
.. meta::
	:description:
		Type %s contains both object and a class type: The ``object`` type already matches an instance of any class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type %s contains both object and a class type
	:og:description: The ``object`` type already matches an instance of any class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-%25s-contains-both-object-and-a-class-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type %s contains both object and a class type
	:twitter:description: Type %s contains both object and a class type: The ``object`` type already matches an instance of any class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-contains-both-object-and-a-class-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-contains-both-object-and-a-class-type.html","name":"Type %s contains both object and a class type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:19:13 +0000","dateModified":"Mon, 27 Jul 2026 16:19:13 +0000","description":"The ``object`` type already matches an instance of any class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-%s-contains-both-object-and-a-class-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``object`` type already matches an instance of any class. Adding a specific class name next to it in a union type, such as ``object|Test``, does not widen what is accepted: every value that matches ``Test`` already matches ``object``. PHP detects this redundancy purely from the type names, without needing ``Test`` to be defined or loaded.

The full message reads: ``Type %s contains both object and a class type, which is redundant``.

Example
_______

.. code-block:: php

   <?php
   
   function test(): object|Test {
   }
   
   ?>


Literal Examples
****************
+ Type Test|object contains both object and a class type, which is redundant

Solutions
_________

+ Remove the specific class name, and keep only ``object``.
+ Remove ``object``, and keep only the specific class name, if that narrower type is what is actually intended.

Related Error Messages
______________________

+ :ref:`type-%s-contains-both-iterable-and-array`
+ :ref:`type-contains-both-true-and-false,-bool-must-be-used-instead`
+ :ref:`duplicate-type-%s-is-redundant`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
