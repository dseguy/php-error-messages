.. _cannot-be-a-class-constant:

cannot be a class constant
--------------------------
 
.. meta::
	:description:
		cannot be a class constant: Class constants must be defined in classes, enums, traits or interfaces.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot be a class constant
	:og:description: Class constants must be defined in classes, enums, traits or interfaces
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-be-a-class-constant.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot be a class constant
	:twitter:description: cannot be a class constant: Class constants must be defined in classes, enums, traits or interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-a-class-constant.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-a-class-constant.html","name":"cannot be a class constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 18:58:34 +0000","description":"Class constants must be defined in classes, enums, traits or interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-be-a-class-constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Class constants must be defined in classes, enums, traits or interfaces. They cannot be created dynamically, nor with the define() function.

Example
_______

.. code-block:: php

   <?php
   define('foo::bar', 1);
   define('::', 1);
   ?>

Solutions
_________

+ Define the class constant in a class.
+ Define the class constant in a trait.
+ Define the class constant in a interface.
+ Define the class constant in a enum.
+ Define the global constant, and use it as a value for the class constant.
