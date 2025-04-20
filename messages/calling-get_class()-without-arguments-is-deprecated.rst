.. _calling-get_class()-without-arguments-is-deprecated:

Calling get_class() without arguments is deprecated
---------------------------------------------------
 
.. meta::
	:description:
		Calling get_class() without arguments is deprecated: get_class() used to allow its usage without an argument.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Calling get_class() without arguments is deprecated
	:og:description: get_class() used to allow its usage without an argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/calling-get_class%28%29-without-arguments-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Calling get_class() without arguments is deprecated
	:twitter:description: Calling get_class() without arguments is deprecated: get_class() used to allow its usage without an argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-get_class()-without-arguments-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-get_class()-without-arguments-is-deprecated.html","name":"Calling get_class() without arguments is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:06:51 +0000","dateModified":"Sun, 20 Apr 2025 08:06:51 +0000","description":"get_class() used to allow its usage without an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/calling-get_class()-without-arguments-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
get_class() used to allow its usage without an argument. Then, it would return the current class context, at compile time. Hence, in the code here, it used to return ``x``, may it be called from ``x`` or ``y``. 

This behavior is not allowed anymore, and will be removed in PHP 9.

Note that calling get_class without an argument was different from calling get_class with the ``null`` value.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo() {
   		echo get_class();         // x
   		echo get_class($this);    // y
   
   		// echo get_class(null);  // Type error
   	}
   }
   
   class Y extends X {}
   
   echo (new Y)->foo();
   
   ?>

Solutions
_________

+ Use the __CLASS__ constant to get the name of the class at compile time.
+ Use the ``get_class($this)`` call, to get the name of the class at execution time.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Structures/GetClassWithoutArg <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/GetClassWithoutArg.html>`_.
