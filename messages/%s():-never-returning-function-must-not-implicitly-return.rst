.. _%s():-never-returning-function-must-not-implicitly-return:

%s(): never-returning function must not implicitly return
---------------------------------------------------------
 
.. meta::
	:description:
		%s(): never-returning function must not implicitly return: A function with the never return type must return anything.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s(): never-returning function must not implicitly return
	:og:description: A function with the never return type must return anything
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-never-returning-function-must-not-implicitly-return.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s(): never-returning function must not implicitly return
	:twitter:description: %s(): never-returning function must not implicitly return: A function with the never return type must return anything
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-never-returning-function-must-not-implicitly-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-never-returning-function-must-not-implicitly-return.html","name":"%s(): never-returning function must not implicitly return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 22 Aug 2025 20:56:10 +0000","dateModified":"Fri, 22 Aug 2025 20:56:10 +0000","description":"A function with the never return type must return anything","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s():-never-returning-function-must-not-implicitly-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A function with the never return type must return anything. This means no ``return`` keyword, but also, no possibility to reach the end of the method, as it would trigger automatically a ``return null;``.

Example
_______

.. code-block:: php

   <?php
   
   function foo(): never {
       if (true) {
           throw new Exception('bad');
       }
   }
   
   foo();
   ?>


Literal Examples
****************
+ foo(): never-returning function must not implicitly return

Solutions
_________

+ Add a ``die`` at the end of the method.
+ Add a ``throw`` at the end of the method.


In more recent PHP versions, this error message is now :ref:`%s():-never-returning-%s-must-not-implicitly-return`.
