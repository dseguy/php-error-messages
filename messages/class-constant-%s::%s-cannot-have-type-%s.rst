.. _class-constant-%s::%s-cannot-have-type-%s:

Class constant %s::%s cannot have type %s
-----------------------------------------
 
.. meta::
	:description:
		Class constant %s::%s cannot have type %s: Some native PHP types are not allowed with a class constant.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class constant %s::%s cannot have type %s
	:og:description: Some native PHP types are not allowed with a class constant
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-constant-%25s%3A%3A%25s-cannot-have-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class constant %s::%s cannot have type %s
	:twitter:description: Class constant %s::%s cannot have type %s: Some native PHP types are not allowed with a class constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-constant-%s::%s-cannot-have-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-constant-%s::%s-cannot-have-type-%s.html","name":"Class constant %s::%s cannot have type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Dec 2024 21:09:49 +0000","dateModified":"Fri, 06 Dec 2024 21:09:49 +0000","description":"Some native PHP types are not allowed with a class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-constant-%s::%s-cannot-have-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Some native PHP types are not allowed with a class constant. This is the case of ``void``, ``never`` and ``callable``. Any mention of them, alone or in a compsed type generates this error. 

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	const callable|int A = 1;
   }
   
   ?>


Literal Examples
****************
+ Class constant X::A cannot have type callable|int

Solutions
_________

+ Remove any illegal type from the definition of the constant.
+ Remove all types from the definition of the constant.

Related Error Messages
______________________

+ :ref:`property-%s::$%s-cannot-have-type-%s`
