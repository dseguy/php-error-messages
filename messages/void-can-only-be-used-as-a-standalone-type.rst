.. _void-can-only-be-used-as-a-standalone-type:

Void can only be used as a standalone type
------------------------------------------
 
.. meta::
	:description:
		Void can only be used as a standalone type: ``void`` is a special return type, indicating that a function or method returns no useful value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Void can only be used as a standalone type
	:og:description: ``void`` is a special return type, indicating that a function or method returns no useful value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/void-can-only-be-used-as-a-standalone-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Void can only be used as a standalone type
	:twitter:description: Void can only be used as a standalone type: ``void`` is a special return type, indicating that a function or method returns no useful value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/void-can-only-be-used-as-a-standalone-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/void-can-only-be-used-as-a-standalone-type.html","name":"Void can only be used as a standalone type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:32:15 +0000","dateModified":"Wed, 05 Aug 2026 11:32:15 +0000","description":"``void`` is a special return type, indicating that a function or method returns no useful value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/void-can-only-be-used-as-a-standalone-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``void`` is a special return type, indicating that a function or method returns no useful value. Since it represents the absence of a value, it cannot be combined with other types in a union, nor made nullable: it can only be used on its own, as the sole return type of a function or method.

Example
_______

.. code-block:: php

   <?php
   
   function foo(): int|void {}
   
   ?>

Solutions
_________

+ Remove the other types, and use ``void`` alone.
+ Remove ``void``, and keep the other type(s) alone.

Related Error Messages
______________________

+ :ref:`never-can-only-be-used-as-a-standalone-type`
+ :ref:`type-mixed-can-only-be-used-as-a-standalone-type`
+ :ref:`a-void-%s-must-not-return-a-value`
+ :ref:`void-cannot-be-used-as-a-parameter-type`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
