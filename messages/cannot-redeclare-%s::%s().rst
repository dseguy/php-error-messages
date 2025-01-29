.. _cannot-redeclare-%s::%s():

Cannot redeclare %s::%s()
-------------------------
 
.. meta::
	:description:
		Cannot redeclare %s::%s(): Each method in a class must have a distinct name.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare %s::%s()
	:og:description: Each method in a class must have a distinct name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-%25s%3A%3A%25s%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare %s::%s()
	:twitter:description: Cannot redeclare %s::%s(): Each method in a class must have a distinct name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s::%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s::%s().html","name":"Cannot redeclare %s::%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 29 Jan 2025 11:43:42 +0000","dateModified":"Wed, 29 Jan 2025 11:43:42 +0000","description":"Each method in a class must have a distinct name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s::%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Each method in a class must have a distinct name. There can be not two methods with the same name.

The parent classes, or the traits, may have duplicate methods: these will be ignored. 

One special case are the enumeration: the backed enumeration, with their type, import two methods to convert a value into one of the case: ``try`` and ``tryFrom``. Then, these two methods are part of the definition of the enumeration, and it is not possible anymore to define them in the enumeration.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function foo() {}
       function foo() {}
   }
   
   enum E {
       function try() {}
       function tryFrom() {}
   }
   
   ?>


Literal Examples
****************
+ Cannot redeclare X::foo()
+ Cannot redeclare X::try()
+ Cannot redeclare X::tryFrom()

Solutions
_________

+ Remove one of the duplicate function.
+ Rename one of the duplicate function.
