.. _%s-cannot-use-%s---it-is-not-a-trait:

%s cannot use %s - it is not a trait
------------------------------------
 
.. meta::
	:description:
		%s cannot use %s - it is not a trait: In a class definition, the use expression must only use traits.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s cannot use %s - it is not a trait
	:og:description: In a class definition, the use expression must only use traits
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-cannot-use-%25s---it-is-not-a-trait.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s cannot use %s - it is not a trait
	:twitter:description: %s cannot use %s - it is not a trait: In a class definition, the use expression must only use traits
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-cannot-use-%s---it-is-not-a-trait.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-cannot-use-%s---it-is-not-a-trait.html","name":"%s cannot use %s - it is not a trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"In a class definition, the use expression must only use traits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-cannot-use-%s---it-is-not-a-trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In a class definition, the use expression must only use traits. All other structures, such as class, interface, enum or else, are not allowed.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   class Y {
   	use x; 
   }
   ?>


Literal Examples
****************
+ y cannot use x - it is not a trait

Solutions
_________

+ Remove the use expression that uses the class.
+ Fix the name of the class, and use an existing trait.
