.. _method-%s::%s()-cannot-be-static:

Method %s::%s() cannot be static
--------------------------------
 
.. meta::
	:description:
		Method %s::%s() cannot be static: Some PHP special methods cannot be static.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::%s() cannot be static
	:og:description: Some PHP special methods cannot be static
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A%25s%28%29-cannot-be-static.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::%s() cannot be static
	:twitter:description: Method %s::%s() cannot be static: Some PHP special methods cannot be static
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-cannot-be-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-cannot-be-static.html","name":"Method %s::%s() cannot be static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jan 2025 17:25:21 +0000","dateModified":"Wed, 01 Jan 2025 17:25:21 +0000","description":"Some PHP special methods cannot be static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::%s()-cannot-be-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Some PHP special methods cannot be static. This is the case of all the PHP magic methods, such as the constructor ``__construct``, the destructor ``__destruct``, and all the others: ``__call()``, ``__callStatic()``, ``__get()``, ``__set()``, ``__isset()``, ``__unset()``, ``__sleep()``, ``__wakeup()``, ``__serialize()``, ``__unserialize()``, ``__toString()``, ``__invoke()``, ``__set_state()``, ``__clone()`` and ``__debugInfo()``.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	static function __construct() {}
   }
   
   ?>


Literal Examples
****************
+ Method x::__construct() cannot be static

Solutions
_________

+ Make a static method that can call the method that would be static. Be aware, this will require the building of an object, as a static method does not set ``$this``.
