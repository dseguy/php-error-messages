.. _constant-%s-is-deprecated:

Constant %s is deprecated
-------------------------
 
.. meta::
	:description:
		Constant %s is deprecated: This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Constant %s is deprecated
	:og:description: This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/constant-%25s-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant %s is deprecated
	:twitter:description: Constant %s is deprecated: This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-%s-is-deprecated.html","name":"Constant %s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 22 Apr 2025 17:41:05 +0000","dateModified":"Tue, 22 Apr 2025 17:41:05 +0000","description":"This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constant-%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version.

The error is emitted every time the constant is used: it may be for its actual intend, or anywhere else.

Example
_______

.. code-block:: php

   <?php
   
   error_reporting(E_STRICT);
   
   ?>


Literal Examples
****************
+ Constant E_STRICT is deprecated

Solutions
_________

+ Stop using that global constant.
+ Find the replacement for this global constant: it might be another constant, or a different command entirely.

Related Error Messages
______________________

+ :ref:`constant-%s::%s-is-deprecated`
