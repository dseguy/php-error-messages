.. _get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference:

Get hook of backed property %s::%s with set hook may not return by reference
----------------------------------------------------------------------------
 
.. meta::
	:description:
		Get hook of backed property %s::%s with set hook may not return by reference: When a property is a virtual property, the ``get`` hook cannot return a reference.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Get hook of backed property %s::%s with set hook may not return by reference
	:og:description: When a property is a virtual property, the ``get`` hook cannot return a reference
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/get-hook-of-backed-property-%25s%3A%3A%25s-with-set-hook-may-not-return-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Get hook of backed property %s::%s with set hook may not return by reference
	:twitter:description: Get hook of backed property %s::%s with set hook may not return by reference: When a property is a virtual property, the ``get`` hook cannot return a reference
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference.html","name":"Get hook of backed property %s::%s with set hook may not return by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:44:13 +0000","dateModified":"Fri, 10 Apr 2026 08:44:13 +0000","description":"When a property is a virtual property, the ``get`` hook cannot return a reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a property is a virtual property, the ``get`` hook cannot return a reference.

Example
_______

.. code-block:: php

   <?php
   
   class A {
       public $prop;
   }
   
   class B extends A {
       private $_prop;
       public $prop {
           &get => $this->_prop;
           set { $this->_prop = $value; }
       }
   }
   
   ?>


Literal Examples
****************
+ Get hook of backed property B::$prop with set hook may not return by reference

Solutions
_________

+ Make the virtual property a concrete one.
+ Remove the reference.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
