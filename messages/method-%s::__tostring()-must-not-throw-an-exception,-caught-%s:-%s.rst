.. _method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s:

Method %s::__toString() must not throw an exception, caught %s: %s
------------------------------------------------------------------
 
.. meta::
	:description:
		Method %s::__toString() must not throw an exception, caught %s: %s: Until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Method %s::__toString() must not throw an exception, caught %s: %s
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/method-%25s%3A%3A__tostring%28%29-must-not-throw-an-exception%2C-caught-%25s%3A-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method %s::__toString() must not throw an exception, caught %s: %s
	:twitter:description: Method %s::__toString() must not throw an exception, caught %s: %s: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s.html","name":"Method %s::__toString() must not throw an exception, caught %s: %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.0, ``__toString`` could not throw exception, and would end up with this error. In PHP 8.0, it is now possible.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __toString() {
           throw new \Exception('error');
       }
       
       function foo() {
           throw new \Exception('error');
       }
       
   }
   
   ?>


Literal Examples
****************
+ Method X::__toString() must not throw an exception, caught Exception: error

Solutions
_________

+ Upgrade to PHP 8.0.
+ Store the error in another property, and check the property in another method, after the call to ``__toString``.
