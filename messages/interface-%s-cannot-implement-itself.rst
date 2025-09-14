.. _interface-%s-cannot-implement-itself:

Interface %s cannot implement itself
------------------------------------
 
.. meta::
	:description:
		Interface %s cannot implement itself: An interface can extend another interface, to expand its list of methods.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Interface %s cannot implement itself
	:og:description: An interface can extend another interface, to expand its list of methods
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/interface-%25s-cannot-implement-itself.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface %s cannot implement itself
	:twitter:description: Interface %s cannot implement itself: An interface can extend another interface, to expand its list of methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-%s-cannot-implement-itself.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-%s-cannot-implement-itself.html","name":"Interface %s cannot implement itself","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 20:12:03 +0000","dateModified":"Sun, 14 Sep 2025 20:12:03 +0000","description":"An interface can extend another interface, to expand its list of methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface-%s-cannot-implement-itself.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An interface can extend another interface, to expand its list of methods. It cannot extends itself, as it is useless.

Example
_______

.. code-block:: php

   <?php
   
   interface I extends I {}
   
   ?>


Literal Examples
****************
+ Interface I cannot implement itself

Solutions
_________

+ Extend another interface.
+ Do not extend the current interface.


In more recent PHP versions, this error message is now :ref:`interface-"%s"-not-found`.
