.. _cannot-throw-objects-that-do-not-implement-throwable:

Cannot throw objects that do not implement Throwable
----------------------------------------------------
 
.. meta::
	:description:
		Cannot throw objects that do not implement Throwable: All classes that are thrown must implement the interfave Throwable.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot throw objects that do not implement Throwable
	:og:description: All classes that are thrown must implement the interfave Throwable
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-throw-objects-that-do-not-implement-throwable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot throw objects that do not implement Throwable
	:twitter:description: Cannot throw objects that do not implement Throwable: All classes that are thrown must implement the interfave Throwable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-throw-objects-that-do-not-implement-throwable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-throw-objects-that-do-not-implement-throwable.html","name":"Cannot throw objects that do not implement Throwable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"All classes that are thrown must implement the interfave Throwable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-throw-objects-that-do-not-implement-throwable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
All classes that are thrown must implement the interfave Throwable. It is possible to catch ``Throwable`` objects, but in fact, it is not possible to implement ``Throwable`` in a class: this is done by extending either ``Exception`` or ``Error``, which, in turn, implements Throwable.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   throw new X();
   
   ?>

Solutions
_________

+ Make the class extends ``\Exception``.
+ Make the class extends ``\Error``.
+ Do not throw the class.
