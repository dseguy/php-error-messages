.. _null-cannot-be-marked-as-nullable:

null cannot be marked as nullable
---------------------------------
 
.. meta::
	:description:
		null cannot be marked as nullable: Since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: null cannot be marked as nullable
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/null-cannot-be-marked-as-nullable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: null cannot be marked as nullable
	:twitter:description: null cannot be marked as nullable: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/null-cannot-be-marked-as-nullable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/null-cannot-be-marked-as-nullable.html","name":"null cannot be marked as nullable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:18 +0000","dateModified":"Mon, 27 Jul 2026 16:18:18 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/null-cannot-be-marked-as-nullable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.2, ``null`` (like ``false`` and ``true``) can be used directly as a standalone type. But ``null`` already means exactly one thing: the value ``null``. Marking it nullable with a leading ``?``, as in ``?null``, would only mean ``null or null``, which is entirely redundant, so PHP rejects it.

Example
_______

.. code-block:: php

   <?php
   
   function test(): ?null
   {
   }
   
   ?>


Literal Examples
****************
+ null cannot be marked as nullable

Solutions
_________

+ Remove the ``?`` and use ``null`` on its own.

Related Error Messages
______________________

+ :ref:`type-contains-both-true-and-false,-bool-must-be-used-instead`
+ :ref:`duplicate-type-%s-is-redundant`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
