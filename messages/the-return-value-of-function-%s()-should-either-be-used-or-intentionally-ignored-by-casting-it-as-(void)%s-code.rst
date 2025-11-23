.. _the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s-code:

The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code
---------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code: .
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code
	:og:description: 
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-return-value-of-function-%25s%28%29-should-either-be-used-or-intentionally-ignored-by-casting-it-as-%28void%29%25s-code.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code
	:twitter:description: The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s-code.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s-code.html","name":"The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Nov 2025 10:00:19 +0000","dateModified":"Mon, 10 Nov 2025 10:00:19 +0000","description":"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s-code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
.

Example
_______

.. code-block:: php

   <?php
   
   #[NoDiscard]
   function foo() {
       return 1;
   }
   
   foo();
   
   ?>


Literal Examples
****************
+ The return value of function foo() should either be used or intentionally ignored by casting it as (void)

Solutions
_________

+ Add the ``(void)`` cast to the function call, so as to ignore the returned value.
+ Store the result of the function call in a variable and use it.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
