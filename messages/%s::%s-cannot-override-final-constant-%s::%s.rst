.. _%s::%s-cannot-override-final-constant-%s::%s:

%s::%s cannot override final constant %s::%s
--------------------------------------------
 
.. meta::
	:description:
		%s::%s cannot override final constant %s::%s: The ``final`` keyword prevents any child class to define the same constant or method.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s::%s cannot override final constant %s::%s
	:og:description: The ``final`` keyword prevents any child class to define the same constant or method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%25s-cannot-override-final-constant-%25s%3A%3A%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s::%s cannot override final constant %s::%s
	:twitter:description: %s::%s cannot override final constant %s::%s: The ``final`` keyword prevents any child class to define the same constant or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::%s-cannot-override-final-constant-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::%s-cannot-override-final-constant-%s::%s.html","name":"%s::%s cannot override final constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 29 Dec 2024 17:45:47 +0000","dateModified":"Sun, 29 Dec 2024 17:45:47 +0000","description":"The ``final`` keyword prevents any child class to define the same constant or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s::%s-cannot-override-final-constant-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``final`` keyword prevents any child class to define the same constant or method.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	final const A = 1;
   }
   
   class Y extends X {
   	const A = 1;
   }
   
   ?>


Literal Examples
****************
+ Y::A cannot override final constant X::Y

Solutions
_________

+ Remove the final option in the parent class.
+ Rename the non-final constant in the child class.

Related Error Messages
______________________

+ :ref:`cannot-override-final-%s::%s()-with-%s::%s()`
