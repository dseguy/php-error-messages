.. _%s-%s-inherits-both-%s::%s-and-%s::%s:

%s %s inherits both %s::%s and %s::%s
-------------------------------------
 
.. meta::
	:description:
		%s %s inherits both %s::%s and %s::%s: PHP reports duplicate constant definitions in different interfaces.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s %s inherits both %s::%s and %s::%s
	:og:description: PHP reports duplicate constant definitions in different interfaces
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-inherits-both-%25s%3A%3A%25s-and-%25s%3A%3A%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s %s inherits both %s::%s and %s::%s
	:twitter:description: %s %s inherits both %s::%s and %s::%s: PHP reports duplicate constant definitions in different interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-inherits-both-%s::%s-and-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-inherits-both-%s::%s-and-%s::%s.html","name":"%s %s inherits both %s::%s and %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"PHP reports duplicate constant definitions in different interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-%s-inherits-both-%s::%s-and-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP reports duplicate constant definitions in different interfaces.

This is very unusual occurrence, reported at linting time. It may also lead to quite a set back when one has to untangle these definitions.

So, shall we always give unique names across interfaces? Or just avoid multiple interfaces with constants on the same class?

There is no 'use' expression to solve the conflict. The same applies to traits, though they can resolve conflicts with the use expression.

Also, multiple same methods in different interface are OK.

Example
_______

.. code-block:: php

   <?php
   
   interface Test1 {
       const FOO = 10;
   }
   
   interface Test2 {
       const FOO = 10;
   }
   
   class Test implements Test1, Test2 {
   }
   
   echo Done\n;
   ?>


Literal Examples
****************
+ class test inherits both test1::FOO and test2::FOO

Solutions
_________

+ Remove one of the constant definition.
+ Rename one of the interface constant.
+ Define the conflicted constant in the class.
+ Remove one of the interfaces.
