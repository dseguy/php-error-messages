.. _a-never-returning-%s-does-not-return-a-value:

A never returning %s does not return a value, but #[\NoDiscard] requires a return value
---------------------------------------------------------------------------------------
 
.. meta::
	:description:
		A never returning %s does not return a value, but #[\NoDiscard] requires a return value: This definition include contradicting information: the return type ``never`` means that the function will never return, so there should be no return value to handle.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A never returning %s does not return a value, but #[\NoDiscard] requires a return value
	:og:description: This definition include contradicting information: the return type ``never`` means that the function will never return, so there should be no return value to handle
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-never-returning-%25s-does-not-return-a-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A never returning %s does not return a value, but #[\NoDiscard] requires a return value
	:twitter:description: A never returning %s does not return a value, but #[\NoDiscard] requires a return value: This definition include contradicting information: the return type ``never`` means that the function will never return, so there should be no return value to handle
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-never-returning-%s-does-not-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-never-returning-%s-does-not-return-a-value.html","name":"A never returning %s does not return a value, but #[\\NoDiscard] requires a return value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 20:52:51 +0000","dateModified":"Fri, 07 Nov 2025 20:52:51 +0000","description":"This definition include contradicting information: the return type ``never`` means that the function will never return, so there should be no return value to handle","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-never-returning-%s-does-not-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This definition include contradicting information: the return type ``never`` means that the function will never return, so there should be no return value to handle. On the other hand, the ``NoDiscard`` attribute request the caller to do something with the returned values. This is irreconciliable.

Example
_______

.. code-block:: php

   <?php
   
   #[\NoDiscard]
   function test(): never {
   	throw new \Exception('Error!');
   }
   
   test();
   
   ?>


Literal Examples
****************
+ A never returning function does not return a value, but #[\NoDiscard] requires a return value
+ A never returning method does not return a value, but #[\NoDiscard] requires a return value

Solutions
_________

+ Remove the ``never`` return type.
+ Remove the ``NoDiscard`` attribute.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
