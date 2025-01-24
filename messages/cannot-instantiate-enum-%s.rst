.. _cannot-instantiate-enum-%s:

Cannot instantiate enum %s
--------------------------
 
.. meta::
	:description:
		Cannot instantiate enum %s: Enumeration cannot be instantiated directly.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot instantiate enum %s
	:og:description: Enumeration cannot be instantiated directly
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-instantiate-enum-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot instantiate enum %s
	:twitter:description: Cannot instantiate enum %s: Enumeration cannot be instantiated directly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-instantiate-enum-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-instantiate-enum-%s.html","name":"Cannot instantiate enum %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jan 2025 10:10:43 +0000","dateModified":"Thu, 09 Jan 2025 10:10:43 +0000","description":"Enumeration cannot be instantiated directly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-instantiate-enum-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Enumeration cannot be instantiated directly. 

An enumeration object is created automatically when reading one of its case.

Example
_______

.. code-block:: php

   <?php
   
   enum E {
   	case A;
   }
   
   //Cannot instantiate enum E
   new E();
   
   // E
   print get_class(E::A);
   
   ?>


Literal Examples
****************
+ Cannot instantiate enum e

Solutions
_________

+ Use one of the enumeration cases.

Related Error Messages
______________________

+ :ref:`cannot-instantiate-trait-%s`
+ :ref:`cannot-instantiate-interface-%s`
