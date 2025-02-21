.. _a-void-%s-must-not-return-a-value:

A void %s must not return a value
---------------------------------
 
.. meta::
	:description:
		A void %s must not return a value: A function, method or closure that uses the ``void`` return type, must not have a ``return`` expression with a parameter, in its body.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A void %s must not return a value
	:og:description: A function, method or closure that uses the ``void`` return type, must not have a ``return`` expression with a parameter, in its body
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-void-%25s-must-not-return-a-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A void %s must not return a value
	:twitter:description: A void %s must not return a value: A function, method or closure that uses the ``void`` return type, must not have a ``return`` expression with a parameter, in its body
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-void-%s-must-not-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-void-%s-must-not-return-a-value.html","name":"A void %s must not return a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A function, method or closure that uses the ``void`` return type, must not have a ``return`` expression with a parameter, in its body","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-void-%s-must-not-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A function, method or closure that uses the ``void`` return type, must not have a ``return`` expression with a parameter, in its body. 

This is checked anywhere in the body of the function, at compilation time. 

It is possible to use return, without any argument. It is not possible to ``return null``, it must be without argument.

Example
_______

.. code-block:: php

   <?php
   
   function foo() : void {
       return 1;
   }
   
   ?>

Solutions
_________

+ Remove the return expression.
+ Remove the argument of the return expression.
+ Remove the void returntype.
