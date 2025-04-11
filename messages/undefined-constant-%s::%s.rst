.. _undefined-constant-%s::%s:

Undefined constant %s::%s
-------------------------
 
.. meta::
	:description:
		Undefined constant %s::%s: The requested class constant could not be found.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined constant %s::%s
	:og:description: The requested class constant could not be found
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-constant-%25s%3A%3A%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined constant %s::%s
	:twitter:description: Undefined constant %s::%s: The requested class constant could not be found
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-constant-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-constant-%s::%s.html","name":"Undefined constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The requested class constant could not be found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined-constant-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The requested class constant could not be found.

The error message is distinct for the global constants, although there is no mention of class in this one.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	const Z = 1;
   	private A = 2;
   }
   
   echo X::Y; 
   
   ?>


Literal Examples
****************
+ Undefined constant X::CONSTANT

Solutions
_________

+ Find the actual name of the requested class constant.
+ Find the actual class of the requested class constant.
+ Check the namespace, or its import.
+ Check the visibility of the class constant: it may be private, or protected.
+ Check the autoload system, to make sure the definition could be found.
+ Define the class constant in the class, or its traits, interfaces or parents.

Related Error Messages
______________________

+ :ref:`undefined-constant-"%s`


In previous PHP versions, this error message used to be :ref:`undefined-class-constant-'%s::%s'`.
