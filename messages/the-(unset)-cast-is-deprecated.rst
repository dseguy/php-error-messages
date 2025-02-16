.. _the-(unset)-cast-is-deprecated:

The (unset) cast is deprecated
------------------------------
 
.. meta::
	:description:
		The (unset) cast is deprecated: Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The (unset) cast is deprecated
	:og:description: Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%28unset%29-cast-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The (unset) cast is deprecated
	:twitter:description: The (unset) cast is deprecated: Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-(unset)-cast-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-(unset)-cast-is-deprecated.html","name":"The (unset) cast is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-(unset)-cast-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7.4, and will be removed in PHP 8.0. It is recommnded to do it with the unset() function.

Example
_______

.. code-block:: php

   <?php
   
   (unset) $x;
   
   ?>

Solutions
_________

+ Use the unset() function to remove variables.
+ Assign null to the variable.


In more recent PHP versions, this error message is now :ref:`the-(unset)-cast-is-no-longer-supported`.
