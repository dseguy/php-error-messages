.. _declaration-of-case-insensitive-constants-is-no-longer-supported:

Declaration of case-insensitive constants is no longer supported
----------------------------------------------------------------
 
.. meta::
	:description:
		Declaration of case-insensitive constants is no longer supported: The define() function used to create case sensitive and case insensitive constants.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Declaration of case-insensitive constants is no longer supported
	:og:description: The define() function used to create case sensitive and case insensitive constants
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/declaration-of-case-insensitive-constants-is-no-longer-supported.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Declaration of case-insensitive constants is no longer supported
	:twitter:description: Declaration of case-insensitive constants is no longer supported: The define() function used to create case sensitive and case insensitive constants
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/declaration-of-case-insensitive-constants-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/declaration-of-case-insensitive-constants-is-no-longer-supported.html","name":"Declaration of case-insensitive constants is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The define() function used to create case sensitive and case insensitive constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/declaration-of-case-insensitive-constants-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The define() function used to create case sensitive and case insensitive constants. This was the usage of the third parameter. 

Since PHP 8.0, only case sensitive constants may be declared, with ``const`` and with ``define()``.

Example
_______

.. code-block:: php

   <?php
   
   // the third parameter is now ignored
   define('CONSTANT_NAME', 'constant value', case_insensitive: true);
   
   ?>

Solutions
_________

+ Declare variations of the constant name.
