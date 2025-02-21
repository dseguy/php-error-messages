.. _cannot-assign-%s-to-class-constant-%s::%s-of-type:

Cannot assign %s to class constant %s::%s of type
-------------------------------------------------
 
.. meta::
	:description:
		Cannot assign %s to class constant %s::%s of type: Since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot assign %s to class constant %s::%s of type
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-assign-%25s-to-class-constant-%25s%3A%3A%25s-of-type.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot assign %s to class constant %s::%s of type
	:twitter:description: Cannot assign %s to class constant %s::%s of type: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-class-constant-%s::%s-of-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-class-constant-%s::%s-of-type.html","name":"Cannot assign %s to class constant %s::%s of type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-assign-%s-to-class-constant-%s::%s-of-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.3, constants may have a type specification. In this case, the default value must match the requested type. 

In particular, there is not type juggling, so type has to match exactly.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       const int A = '3';
   }
   ?>


Literal Examples
****************
+ Cannot assign string to class constant x::A of type int

Solutions
_________

+ Drop the default value.
+ Adapt the default value to the requested type.
+ Drop the type of the constant.
