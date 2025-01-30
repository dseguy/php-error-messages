.. _instanceof-expects-an-object-instance,-constant-given:

instanceof expects an object instance, constant given
-----------------------------------------------------
 
.. meta::
	:description:
		instanceof expects an object instance, constant given: Until PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: instanceof expects an object instance, constant given
	:og:description: Until PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/instanceof-expects-an-object-instance%2C-constant-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof expects an object instance, constant given
	:twitter:description: instanceof expects an object instance, constant given: Until PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/instanceof-expects-an-object-instance,-constant-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/instanceof-expects-an-object-instance,-constant-given.html","name":"instanceof expects an object instance, constant given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jan 2025 14:27:42 +0000","dateModified":"Thu, 30 Jan 2025 14:27:42 +0000","description":"Until PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/instanceof-expects-an-object-instance,-constant-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 7.3, PHP required an object as the left operand of ``instanceof``. In recent versions, PHP does not emit an error anymore, and returns null.

Although the function reports a constant problem, the error is reported with literal values, and not with constants.

Constants were allowed to receive objects in PHP 8.1.

Example
_______

.. code-block:: php

   <?php
   
   null instanceof A::class;
   
   ?>

Solutions
_________

+ Upgrade to PHP 7.3 or more recent.
+ Chech the left operand with ``is_object()``, before using instanceof.
