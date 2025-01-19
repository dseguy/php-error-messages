.. _the-magic-method-%s::%s()-must-have-public-visibility:

The magic method %s::%s() must have public visibility
-----------------------------------------------------
 
.. meta::
	:description:
		The magic method %s::%s() must have public visibility: Some of the magic method must be set visible, as their features are available to external sources.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The magic method %s::%s() must have public visibility
	:og:description: Some of the magic method must be set visible, as their features are available to external sources
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-magic-method-%25s%3A%3A%25s%28%29-must-have-public-visibility.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The magic method %s::%s() must have public visibility
	:twitter:description: The magic method %s::%s() must have public visibility: Some of the magic method must be set visible, as their features are available to external sources
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Some of the magic method must be set visible, as their features are available to external sources.

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
+ Remove  the magic method.
