.. _constant-%s::%s-is-deprecated:

Constant %s::%s is deprecated
-----------------------------
 
.. meta::
	:description:
		Constant %s::%s is deprecated: This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Constant %s::%s is deprecated
	:og:description: This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/constant-%25s%3A%3A%25s-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant %s::%s is deprecated
	:twitter:description: Constant %s::%s is deprecated: This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-%s::%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/constant-%s::%s-is-deprecated.html","name":"Constant %s::%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 19:09:54 +0000","description":"This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/constant-%s::%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when a class constant is supported in the current PHP engine, but will be removed in a future version.

The error is emitted every time the class constant is used: it may be for its actual intend, or anywhere else.

The error message is also emitted with the usage of the Deprecated attribute, since PHP 8.4.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	#[Deprecated()]
   	public const D = deprecated;
   }
   
   echo X::D;
   
   ?>


Literal Examples
****************
+ Constant X::D is deprecated

Solutions
_________

+ Stop using that class constant.
+ Find the replacement for this class constant: it might be another constant, or a different command entirely.

Related Error Messages
______________________

+ :ref:`constant-%s-is-deprecated`
