.. _%s():-never-returning-%s-must-not-implicitly-return:

%s(): never-returning %s must not implicitly return
---------------------------------------------------
 
.. meta::
	:description:
		%s(): never-returning %s must not implicitly return: An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s(): never-returning %s must not implicitly return
	:og:description: An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-never-returning-%25s-must-not-implicitly-return.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s(): never-returning %s must not implicitly return
	:twitter:description: %s(): never-returning %s must not implicitly return: An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-never-returning-%s-must-not-implicitly-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-never-returning-%s-must-not-implicitly-return.html","name":"%s(): never-returning %s must not implicitly return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Sep 2025 17:12:35 +0000","dateModified":"Mon, 15 Sep 2025 17:12:35 +0000","description":"An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s():-never-returning-%s-must-not-implicitly-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An implicit return is a method reaching the end of its body block, and ending its execution without an explicit ``return`` statement. In fact, PHP executes an implicit return statement, et returns the value ``NULL``. In the case of a method, whose return type is ``never``, this should not happen. There must be a call to ``die``, ``exit``, or ``throw``, or any other mean to prevent this function to reach its normal ending. 

This error is only reported at execution time.

Example
_______

.. code-block:: php

   <?php
   
   function myDeath(): never {
   
       if (rand(0, 1)) {
           die();
       }
   }
   
   myDeath();
   
   ?>


Literal Examples
****************
+ myDeath(): never-returning function must not implicitly return

Solutions
_________

+ Add a ``die`` or ``exit`` before the end of the method.
+ Add a ``throw`` before the end of the method.
+ Add an infinite loop in the method.


In previous PHP versions, this error message used to be :ref:`%s():-never-returning-function-must-not-implicitly-return`.
