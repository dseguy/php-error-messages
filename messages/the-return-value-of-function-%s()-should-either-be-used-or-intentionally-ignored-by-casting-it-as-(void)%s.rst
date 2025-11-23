.. _the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s:

The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S
----------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S: When a function has the ``NoDiscard`` attribute, it means that its returned value must be collected and used.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S
	:og:description: When a function has the ``NoDiscard`` attribute, it means that its returned value must be collected and used
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-return-value-of-function-%25s%28%29-should-either-be-used-or-intentionally-ignored-by-casting-it-as-%28void%29%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S
	:twitter:description: The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S: When a function has the ``NoDiscard`` attribute, it means that its returned value must be collected and used
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s.html","name":"The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 20:22:00 +0000","dateModified":"Sun, 16 Nov 2025 20:22:00 +0000","description":"When a function has the ``NoDiscard`` attribute, it means that its returned value must be collected and used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-return-value-of-function-%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a function has the ``NoDiscard`` attribute, it means that its returned value must be collected and used. When the value is simply ignored, PHP stops execution with a fatal error.

Example
_______

.. code-block:: php

   <?php
   
   #[\NoDiscard]
   function foo() {
       return 1;
   }
   
   foo();
   
   ?>

Solutions
_________

+ Store the returned value in a variable, and use it to check the returned value.
+ Use the function call as an argument of another function.
+ Use the ``(void)`` cast, to explicitely ignore the result.

Related Error Messages
______________________

+ :ref:`the-return-value-of-method-%s::%s()-should-either-be-used-or-intentionally-ignored-by-casting-it-as-(void)%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
