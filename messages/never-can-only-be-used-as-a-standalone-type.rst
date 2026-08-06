.. _never-can-only-be-used-as-a-standalone-type:

never can only be used as a standalone type
-------------------------------------------
 
.. meta::
	:description:
		never can only be used as a standalone type: ``never`` is a special return type, indicating that a function or method never returns control to its caller: it always throws, calls ``exit()``, or otherwise never completes normally.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: never can only be used as a standalone type
	:og:description: ``never`` is a special return type, indicating that a function or method never returns control to its caller: it always throws, calls ``exit()``, or otherwise never completes normally
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/never-can-only-be-used-as-a-standalone-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: never can only be used as a standalone type
	:twitter:description: never can only be used as a standalone type: ``never`` is a special return type, indicating that a function or method never returns control to its caller: it always throws, calls ``exit()``, or otherwise never completes normally
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/never-can-only-be-used-as-a-standalone-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/never-can-only-be-used-as-a-standalone-type.html","name":"never can only be used as a standalone type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:51 +0000","dateModified":"Wed, 05 Aug 2026 11:31:51 +0000","description":"``never`` is a special return type, indicating that a function or method never returns control to its caller: it always throws, calls ``exit()``, or otherwise never completes normally","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/never-can-only-be-used-as-a-standalone-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``never`` is a special return type, indicating that a function or method never returns control to its caller: it always throws, calls ``exit()``, or otherwise never completes normally.

Because ``never`` represents the absence of any return at all, it cannot be combined with other types in a union, nor made nullable: it can only be used on its own, as the sole return type of a function or method.

Example
_______

.. code-block:: php

   <?php
   
   function foo(): int|never {}
   
   ?>

Solutions
_________

+ Remove the other types, and use ``never`` alone.
+ Remove ``never``, and keep the other type(s) alone.

Related Error Messages
______________________

+ :ref:`void-can-only-be-used-as-a-standalone-type`
+ :ref:`type-mixed-can-only-be-used-as-a-standalone-type`
+ :ref:`a-never-returning-%s-must-not-return`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
