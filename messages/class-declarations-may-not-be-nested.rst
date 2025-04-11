.. _class-declarations-may-not-be-nested:

Class declarations may not be nested
------------------------------------
 
.. meta::
	:description:
		Class declarations may not be nested: It is not allowed to define a class, trait, interface or enum inside another class, trait or enum.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class declarations may not be nested
	:og:description: It is not allowed to define a class, trait, interface or enum inside another class, trait or enum
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-declarations-may-not-be-nested.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class declarations may not be nested
	:twitter:description: Class declarations may not be nested: It is not allowed to define a class, trait, interface or enum inside another class, trait or enum
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-declarations-may-not-be-nested.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-declarations-may-not-be-nested.html","name":"Class declarations may not be nested","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is not allowed to define a class, trait, interface or enum inside another class, trait or enum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-declarations-may-not-be-nested.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not allowed to define a class, trait, interface or enum inside another class, trait or enum. 

Conditional classes, trait, interfaces or enum may be created, inside if/then, functions and closures, or also loop structures.

The error message is the same for all types of structures, and only mentions class.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo() {
   		class Y {}
   	}
   }
   
   ?>

Solutions
_________

+ Use an anonymous class.
+ Use a conditional class, with a if/then, in the global space.
+ Use a function to store the definition and call it at will.
