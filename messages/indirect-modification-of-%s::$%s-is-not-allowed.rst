.. _indirect-modification-of-%s::\$%s-is-not-allowed:

Indirect modification of %s::$%s is not allowed
-----------------------------------------------
 
.. meta::
	:description:
		Indirect modification of %s::$%s is not allowed: While it is possible to create references on object&#039;s properties, it is not possible to do so on a property with a hook.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Indirect modification of %s::$%s is not allowed
	:og:description: While it is possible to create references on object&#039;s properties, it is not possible to do so on a property with a hook
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/indirect-modification-of-%25s%3A%3A%24%25s-is-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Indirect modification of %s::$%s is not allowed
	:twitter:description: Indirect modification of %s::$%s is not allowed: While it is possible to create references on object's properties, it is not possible to do so on a property with a hook
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/indirect-modification-of-%s::$%s-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/indirect-modification-of-%s::$%s-is-not-allowed.html","name":"Indirect modification of %s::$%s is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Sep 2025 05:11:31 +0000","dateModified":"Tue, 02 Sep 2025 05:11:31 +0000","description":"While it is possible to create references on object's properties, it is not possible to do so on a property with a hook","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/indirect-modification-of-%s::$%s-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
While it is possible to create references on object's properties, it is not possible to do so on a property with a hook. The property hook is returned by value, by default.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public $byRef {
           get {
               $x = 42;
               return $x;
           }
       }
   }
   
   $x = new X();
   $y = &$x->byRef;
   
   ?>


Literal Examples
****************
+ Indirect modification of X::$byRef is not allowed

Solutions
_________

+ Add ``&`` before the ``get`` hook.
+ Make the property a normal property, without hooks.
+ Avoid using a reference on a property hook.

Related Error Messages
______________________

+ :ref:`cannot-create-reference-to-property-%s::$%s`
