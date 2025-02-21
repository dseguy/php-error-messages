.. _call-to-a-member-function-%s()-on-%s:

Call to a member function %s() on %s
------------------------------------
 
.. meta::
	:description:
		Call to a member function %s() on %s: This error happens when the object syntax is used on a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to a member function %s() on %s
	:og:description: This error happens when the object syntax is used on a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-a-member-function-%25s%28%29-on-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to a member function %s() on %s
	:twitter:description: Call to a member function %s() on %s: This error happens when the object syntax is used on a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-a-member-function-%s()-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-a-member-function-%s()-on-%s.html","name":"Call to a member function %s() on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error happens when the object syntax is used on a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call-to-a-member-function-%s()-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error happens when the object syntax is used on a string. A string is a scalar type, and cannot hold method, properties nor constants. The type of the variable should be checked before usage. This also happens with the nullsafe operator, which only protects against NULL used as an object.

Example
_______

.. code-block:: php

   <?php
   
   'a'?->foo();
   
   $string = 'abc';
   $string->foo();
   
   ?>


Literal Examples
****************
+ Call to a member function foo() on string
+ Call to a member function foo() on int
+ Call to a member function foo() on null

Solutions
_________

+ Check the type of the object before usage.
