.. _a-never-returning-%s-must-not-return:

A never-returning %s must not return
------------------------------------
 
.. meta::
	:description:
		A never-returning %s must not return: A function that never returns, aka, with the ``never`` return type, must not use the return statement.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A never-returning %s must not return
	:og:description: A function that never returns, aka, with the ``never`` return type, must not use the return statement
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-never-returning-%25s-must-not-return.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A never-returning %s must not return
	:twitter:description: A never-returning %s must not return: A function that never returns, aka, with the ``never`` return type, must not use the return statement
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-never-returning-%s-must-not-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-never-returning-%s-must-not-return.html","name":"A never-returning %s must not return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 11 Nov 2024 21:30:38 +0000","dateModified":"Mon, 11 Nov 2024 21:30:38 +0000","description":"A function that never returns, aka, with the ``never`` return type, must not use the return statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-never-returning-%s-must-not-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A function that never returns, aka, with the ``never`` return type, must not use the return statement. 

In fact, it must use either ``throw``, ``die``, ``exit``, or call another function that never returns. 

This applies to methods, static methods, and any variant of closure.

The runtime-equivalent of this error is ``never-returning function must not implicitly return``.


Example
_______

.. code-block:: php

   <?php
   
   function foo() : never {
   	return 1;
   }
   
   ?>


Literal Examples
****************
+ A never-returning function must not return.

Solutions
_________

+ Remove the ``never`` return type.
+ Remove the ``return`` call.
