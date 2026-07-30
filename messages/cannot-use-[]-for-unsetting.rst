.. _cannot-use-[]-for-unsetting:

Cannot use [] for unsetting
---------------------------
 
.. meta::
	:description:
		Cannot use [] for unsetting: unset() removes a specific, existing element identified by an explicit key.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use [] for unsetting
	:og:description: unset() removes a specific, existing element identified by an explicit key
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%5B%5D-for-unsetting.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use [] for unsetting
	:twitter:description: Cannot use [] for unsetting: unset() removes a specific, existing element identified by an explicit key
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-[]-for-unsetting.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-[]-for-unsetting.html","name":"Cannot use [] for unsetting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:00 +0000","dateModified":"Thu, 30 Jul 2026 07:30:00 +0000","description":"unset() removes a specific, existing element identified by an explicit key","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-[]-for-unsetting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
unset() removes a specific, existing element identified by an explicit key. The empty-bracket append syntax ($array[]) only has meaning in a write context, where it picks the next available integer key to create a new element; there is no such "next element" to remove, so combining the two is rejected at compile time.

Example
_______

.. code-block:: php

   <?php
   
   $array = [1, 2, 3];
   unset($array[]);
   
   ?>

Solutions
_________

+ Pass an explicit key to unset(), e.g. unset($array[2]);.

Related Error Messages
______________________

+ :ref:`cannot-append-to-$globals`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
