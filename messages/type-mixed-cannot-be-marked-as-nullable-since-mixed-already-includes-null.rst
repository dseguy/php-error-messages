.. _type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null:

Type mixed cannot be marked as nullable since mixed already includes null
-------------------------------------------------------------------------
 
.. meta::
	:description:
		Type mixed cannot be marked as nullable since mixed already includes null: ``mixed`` is a special type, that represents all the available types, include null.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type mixed cannot be marked as nullable since mixed already includes null
	:og:description: ``mixed`` is a special type, that represents all the available types, include null
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type mixed cannot be marked as nullable since mixed already includes null
	:twitter:description: Type mixed cannot be marked as nullable since mixed already includes null: ``mixed`` is a special type, that represents all the available types, include null
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html","name":"Type mixed cannot be marked as nullable since mixed already includes null","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 16:00:44 +0000","dateModified":"Sun, 14 Sep 2025 16:00:44 +0000","description":"``mixed`` is a special type, that represents all the available types, include null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``mixed`` is a special type, that represents all the available types, include null.

Example
_______

.. code-block:: php

   <?php
   
   function foo(?mixed $i = null) {}
   
   ?>

Solutions
_________

+ Remove the ``?`` type with mixed.
+ Keep the ``?`` type, and replace ``mixed``, with some other type.

Related Error Messages
______________________

+ :ref:`type-mixed-can-only-be-used-as-a-standalone-type`
