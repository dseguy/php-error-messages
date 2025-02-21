.. _cannot-redefine-class-constant:

Cannot redefine class constant
------------------------------
 
.. meta::
	:description:
		Cannot redefine class constant: It is only allowed to defined a constant once per class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redefine class constant
	:og:description: It is only allowed to defined a constant once per class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redefine-class-constant.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redefine class constant
	:twitter:description: Cannot redefine class constant: It is only allowed to defined a constant once per class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant.html","name":"Cannot redefine class constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is only allowed to defined a constant once per class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is only allowed to defined a constant once per class. 

A constant with the same name may be defined in a parent or child class, or even in a trait: there are rules that allow PHP to select one of them, whenever there is a possible name conflict. 

At the class, interface, trait level, the constants must all be distinct. 

At the enumeration level, the naming conflict may arise between a case and a const: the error message is then the same.

This error applies to class constants, and there is a different error for global constants.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	const A = 1, A = 1;
   }
   
   enum E {
   	case B;
   
   	const B = 1;
   }
   
   ?>

Solutions
_________

+ Remove one of the constant.
+ Rename one of the constant.
+ Move one of the constant to a parent, trait or interface.

Related Error Messages
______________________

+ :ref:`constant-%s-already-defined`
