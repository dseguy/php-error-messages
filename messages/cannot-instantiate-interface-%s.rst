.. _cannot-instantiate-interface-%s:

Cannot instantiate interface %s
-------------------------------
 
.. meta::
	:description:
		Cannot instantiate interface %s: An interface represents an abstract class, and cannot be instantiated alone.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot instantiate interface %s
	:og:description: An interface represents an abstract class, and cannot be instantiated alone
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-instantiate-interface-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot instantiate interface %s
	:twitter:description: Cannot instantiate interface %s: An interface represents an abstract class, and cannot be instantiated alone
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-instantiate-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-instantiate-interface-%s.html","name":"Cannot instantiate interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Apr 2025 17:28:23 +0000","dateModified":"Fri, 11 Apr 2025 17:28:23 +0000","description":"An interface represents an abstract class, and cannot be instantiated alone","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-instantiate-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An interface represents an abstract class, and cannot be instantiated alone. For that, the interface must be implemented by a class, aka, it must be specified with the ``implements`` keyword.

Example
_______

.. code-block:: php

   <?php
   
   interface I {}
   
   //Cannot instantiate interface I
   new I();
   
   class XI implements I {
   }
   
   new XI(); 
   
   ?>


Literal Examples
****************
+ Cannot instantiate interface i

Solutions
_________

+ Implement the interface with a class and use that class.

Related Error Messages
______________________

+ :ref:`cannot-instantiate-trait-%s`
+ :ref:`cannot-instantiate-enum-%s`
