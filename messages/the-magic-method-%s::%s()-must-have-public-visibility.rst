.. _the-magic-method-%s::%s()-must-have-public-visibility:

The magic method %s::%s() must have public visibility
-----------------------------------------------------
 
.. meta::
	:description:
		The magic method %s::%s() must have public visibility: The magic methods must have the ``public`` visibility, as their features are available to external sources.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The magic method %s::%s() must have public visibility
	:og:description: The magic methods must have the ``public`` visibility, as their features are available to external sources
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-magic-method-%25s%3A%3A%25s%28%29-must-have-public-visibility.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The magic method %s::%s() must have public visibility
	:twitter:description: The magic method %s::%s() must have public visibility: The magic methods must have the ``public`` visibility, as their features are available to external sources
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-magic-method-%s::%s()-must-have-public-visibility.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-magic-method-%s::%s()-must-have-public-visibility.html","name":"The magic method %s::%s() must have public visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"The magic methods must have the ``public`` visibility, as their features are available to external sources","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-magic-method-%s::%s()-must-have-public-visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The magic methods must have the ``public`` visibility, as their features are available to external sources. It may also use the default visibility.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private function __isset($x) {}
       protected function __get($x) {}
   }
   
   ?>


Literal Examples
****************
+ The magic method X::__isset() must have public visibility
+ The magic method X::__get() must have public visibility
+ The magic method X::__set() must have public visibility

Solutions
_________

+ Set the visibility to ``public``.
+ Remove the visibility, to use the default of ``public``.
+ Remove  the magic method.
