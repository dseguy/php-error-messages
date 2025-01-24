.. _%s-cannot-implement-%s---it-is-not-an-interface:

%s cannot implement %s - it is not an interface
-----------------------------------------------
 
.. meta::
	:description:
		%s cannot implement %s - it is not an interface: The ``implements`` keyword must use an interface, and cannot use anything else.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s cannot implement %s - it is not an interface
	:og:description: The ``implements`` keyword must use an interface, and cannot use anything else
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-cannot-implement-%25s---it-is-not-an-interface.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s cannot implement %s - it is not an interface
	:twitter:description: %s cannot implement %s - it is not an interface: The ``implements`` keyword must use an interface, and cannot use anything else
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-cannot-implement-%s---it-is-not-an-interface.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-cannot-implement-%s---it-is-not-an-interface.html","name":"%s cannot implement %s - it is not an interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jan 2025 09:25:16 +0000","dateModified":"Sat, 18 Jan 2025 09:25:16 +0000","description":"The ``implements`` keyword must use an interface, and cannot use anything else","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-cannot-implement-%s---it-is-not-an-interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``implements`` keyword must use an interface, and cannot use anything else. In particular, it cannot be another class, enumeration or trait. All four structures CITE (class, Interface, Trait and Enumeration) use the same namespaces, and they cannot be told apart by reading the name only. 

Indeed, when the structure has no definition, PHP repots ``interface-"e" not found``.


Example
_______

.. code-block:: php

   <?php
   
   enum E {}
   class X implements E {}
   
   ?>


Literal Examples
****************
+ X cannot implement e - it is not an interface

Solutions
_________

+ Make sure the implements structure is an interface, not a class, trait or enumeration.

Related Error Messages
______________________

+ :ref:`interface-"%s"-not-found`
