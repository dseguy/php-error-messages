.. _declaration-of-%s::%s()-must-be-compatible-with-%s::%s():

Declaration of %s::%s() must be compatible with %s::%s()
--------------------------------------------------------
 
.. meta::
	:description:
		Declaration of %s::%s() must be compatible with %s::%s(): Classes methods signature have to be compatible between a parent class and a child class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Declaration of %s::%s() must be compatible with %s::%s()
	:og:description: Classes methods signature have to be compatible between a parent class and a child class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s%3A%3A%25s%28%29-must-be-compatible-with-%25s%3A%3A%25s%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Declaration of %s::%s() must be compatible with %s::%s()
	:twitter:description: Declaration of %s::%s() must be compatible with %s::%s(): Classes methods signature have to be compatible between a parent class and a child class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/declaration-of-%s::%s()-must-be-compatible-with-%s::%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/declaration-of-%s::%s()-must-be-compatible-with-%s::%s().html","name":"Declaration of %s::%s() must be compatible with %s::%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 01 Feb 2025 09:27:27 +0000","dateModified":"Sat, 01 Feb 2025 09:27:27 +0000","description":"Classes methods signature have to be compatible between a parent class and a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/declaration-of-%s::%s()-must-be-compatible-with-%s::%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Classes methods signature have to be compatible between a parent class and a child class. When the signatures are different, the caller has to figure out which object is being used, and how to call the method. Hence, PHP checks that methods are compatible. 

Method signature compatibility applies to all methods, except for ``__construct``, which may have completely different signatures one from another.

The error message requires ``compatible`` signatures, which means that some variations are possible, and others are not. 

Authorized variations

+ Add a new parameter, with a default value 
+ Make the returntype more general than the parent
+ Make the parameter types stricter than the parent
+ Add elements to a union type of a parameter
+ Change the default value 
+ Change the names of the parameters (not recommended)
+ Make the visibility stricter 

Forbidden variations

+ Add or remove a parameter
+ Add or remove a default value
+ Add or remove a parameter type
+ Add or remove the return type
+ Add or remove the reference option
+ Add or remove the variadic option
+ Add or remove the static option.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function foo($a) {}
   }
   
   class Y extends X {
       function foo() {}
   }
   ?>


Literal Examples
****************
+ Declaration of y::foo() must be compatible with x::foo()

Solutions
_________

+ Check the variations and fix them.
+ Change the name of the method to a free one.
