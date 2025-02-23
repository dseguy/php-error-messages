.. _defining-a-custom-assert()-function-is-not-allowed,:

Defining a custom assert() function is not allowed,
---------------------------------------------------
 
.. meta::
	:description:
		Defining a custom assert() function is not allowed,: assert() is a PHP native function, used to create assertions.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Defining a custom assert() function is not allowed,
	:og:description: assert() is a PHP native function, used to create assertions
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/defining-a-custom-assert%28%29-function-is-not-allowed%2C.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Defining a custom assert() function is not allowed,
	:twitter:description: Defining a custom assert() function is not allowed,: assert() is a PHP native function, used to create assertions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/defining-a-custom-assert()-function-is-not-allowed,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/defining-a-custom-assert()-function-is-not-allowed,.html","name":"Defining a custom assert() function is not allowed,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Feb 2025 14:19:06 +0000","dateModified":"Sun, 23 Feb 2025 14:19:06 +0000","description":"assert() is a PHP native function, used to create assertions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/defining-a-custom-assert()-function-is-not-allowed,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
assert() is a PHP native function, used to create assertions. To avoid confusion, or redefinition of this function, it is not allowed to create a custom version of this function, even in a namespace.

Example
_______

.. code-block:: php

   <?php
   
   namespace X;
   
   function assert() {}
   
   ?>

Solutions
_________

+ Give another name to that function.
+ Make it a method.
+ Make it a Closure.

See Also
________

+ `assert <https://www.php.net/manual/en/function.assert.php>`_
