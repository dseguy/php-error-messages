.. ___clone-method-called-on-non-object:

__clone method called on non-object
-----------------------------------
 
.. meta::
	:description:
		__clone method called on non-object: This error signals an attempt at cloning a value that is not an object.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: __clone method called on non-object
	:og:description: This error signals an attempt at cloning a value that is not an object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/__clone-method-called-on-non-object.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __clone method called on non-object
	:twitter:description: __clone method called on non-object: This error signals an attempt at cloning a value that is not an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/__clone-method-called-on-non-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/__clone-method-called-on-non-object.html","name":"__clone method called on non-object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"This error signals an attempt at cloning a value that is not an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/__clone-method-called-on-non-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error signals an attempt at cloning a value that is not an object. Indeed, anything but an object triggers this error: boolean, array, string, etc.

Note that it is possible to clone a constant since PHP 8.1, so it is legit to use clone on a constant.

Example
_______

.. code-block:: php

   <?php
   
   $a = clone array();
   
   $b = null; 
   clone null;
   
   const C = new Stdclass();
   clone C;
   
   ?>

Solutions
_________

+ Check the data before cloning it, with is_object() or instanceof.

Related Error Messages
______________________

+ :ref:`can-only-throw-objects`
