.. _never-returning-function-must-not-implicitly-return:

never-returning function must not implicitly return
---------------------------------------------------
 
.. meta::
	:description:
		never-returning function must not implicitly return: A never returning function or method never reaches the end of the method, or any return operation.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: never-returning function must not implicitly return
	:og:description: A never returning function or method never reaches the end of the method, or any return operation
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/never-returning-function-must-not-implicitly-return.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: never-returning function must not implicitly return
	:twitter:description: never-returning function must not implicitly return: A never returning function or method never reaches the end of the method, or any return operation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/never-returning-function-must-not-implicitly-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/never-returning-function-must-not-implicitly-return.html","name":"never-returning function must not implicitly return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A never returning function or method never reaches the end of the method, or any return operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/never-returning-function-must-not-implicitly-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A never returning function or method never reaches the end of the method, or any return operation. It must either throw an exception, trigger an error, die or exit, or stay in an infinite loop. 

In the case of an empty function, PHP execution reachs the end of the method, and adds an implicit ``return null`` call, which triggers the TypeError. 

``never`` type is checked at execution time, though the presence of ``return`` in the body of the method triggers it at linting time.

Example
_______

.. code-block:: php

   <?php
   
   function foo() : never { }
   
   ?>

Solutions
_________

+ Remove all return calls from the body of the method.
+ Prevent the method to reaching its end.
+ Checks that the method include either a ``throw``, ``die`` or ``exit``, a call to another never-returning method, or an infinite loop.
