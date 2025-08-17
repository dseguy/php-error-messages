.. _cannot-rebind-scope-of-closure-created-from-method:

Cannot rebind scope of closure created from method
--------------------------------------------------
 
.. meta::
	:description:
		Cannot rebind scope of closure created from method: When a closure is build from a method and an existing object, it is not possible to rebind it to another object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot rebind scope of closure created from method
	:og:description: When a closure is build from a method and an existing object, it is not possible to rebind it to another object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-rebind-scope-of-closure-created-from-method.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot rebind scope of closure created from method
	:twitter:description: Cannot rebind scope of closure created from method: When a closure is build from a method and an existing object, it is not possible to rebind it to another object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-method.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-method.html","name":"Cannot rebind scope of closure created from method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 17 Aug 2025 14:23:59 +0000","dateModified":"Sun, 17 Aug 2025 14:23:59 +0000","description":"When a closure is build from a method and an existing object, it is not possible to rebind it to another object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a closure is build from a method and an existing object, it is not possible to rebind it to another object.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function method () {}
   }
   
   class Y {}
   
   $x = new X;
   $fn = $x->method(...);
   $ret = $fn->bindTo($x, Y::class);
   
   ?>

Solutions
_________

+ To be rebound, the closure must be build from within the class.
