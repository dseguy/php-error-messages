.. _cannot-use-empty-list:

Cannot use empty list
---------------------
 
.. meta::
	:description:
		Cannot use empty list: list() must contain at least one non-empty element.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use empty list
	:og:description: list() must contain at least one non-empty element
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-empty-list.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use empty list
	:twitter:description: Cannot use empty list: list() must contain at least one non-empty element
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-empty-list.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-empty-list.html","name":"Cannot use empty list","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jan 2025 17:06:58 +0000","dateModified":"Mon, 20 Jan 2025 17:06:58 +0000","description":"list() must contain at least one non-empty element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-empty-list.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
list() must contain at least one non-empty element. Otherwise, it would attempt to load data into no variables, and that makes no sense.

Example
_______

.. code-block:: php

   <?php
   
   [,,,] = [1,2,3];
   list(,,,) = [1,2,3];
   
   ?>

Solutions
_________

+ Add at least one variable in the list() call.
+ Remove the call to list().

Related Error Messages
______________________

+ :ref:`cannot-use-positional-argument-after-named-argument`
