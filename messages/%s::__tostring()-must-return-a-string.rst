.. _%s::__tostring()-must-return-a-string:

%s::__toString() must return a string
-------------------------------------
 
.. meta::
	:description:
		%s::__toString() must return a string: The magic method ``__toString`` converts the current object into a string.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s::__toString() must return a string
	:og:description: The magic method ``__toString`` converts the current object into a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A__tostring%28%29-must-return-a-string.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s::__toString() must return a string
	:twitter:description: %s::__toString() must return a string: The magic method ``__toString`` converts the current object into a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::__tostring()-must-return-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::__tostring()-must-return-a-string.html","name":"%s::__toString() must return a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Jun 2025 16:35:25 +0000","dateModified":"Mon, 16 Jun 2025 16:35:25 +0000","description":"The magic method ``__toString`` converts the current object into a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s::__tostring()-must-return-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The magic method ``__toString`` converts the current object into a string. Hence, and even if the return type of that method is not explicitely set, it MUST return a string.

With strict types, it may only be a string. Without them, integers and booleans are auto cast silently.

Adding the return type or not does not change this behavior. It is actually set, and could not be any other type anyway.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __toString() {
           return 1;
       }
   }
   
   (string) (new x);
   
   ?>


Literal Examples
****************
+ X::__toString() must return a string

Solutions
_________

+ Return a string.
+ Cast the value to a string before returning.
