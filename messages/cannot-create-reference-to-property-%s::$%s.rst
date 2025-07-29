.. _cannot-create-reference-to-property-%s::\$%s:

Cannot create reference to property %s::$%s
-------------------------------------------
 
.. meta::
	:description:
		Cannot create reference to property %s::$%s: While it is possible to acquire a reference on an object&#039;s property, it is not possible to acquire that reference on a property with hooks.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot create reference to property %s::$%s
	:og:description: While it is possible to acquire a reference on an object&#039;s property, it is not possible to acquire that reference on a property with hooks
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-create-reference-to-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot create reference to property %s::$%s
	:twitter:description: Cannot create reference to property %s::$%s: While it is possible to acquire a reference on an object's property, it is not possible to acquire that reference on a property with hooks
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-reference-to-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-reference-to-property-%s::$%s.html","name":"Cannot create reference to property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 29 Jul 2025 17:51:56 +0000","dateModified":"Tue, 29 Jul 2025 17:51:56 +0000","description":"While it is possible to acquire a reference on an object's property, it is not possible to acquire that reference on a property with hooks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-create-reference-to-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
While it is possible to acquire a reference on an object's property, it is not possible to acquire that reference on a property with hooks. By default, the property hook is returned by value, and cannot accomodate the reference. Unless the property hooks is made by reference, with a ``&`` before the name of the hook.

The message is also related to using an object in a foreach loop. There is a different message for direct creation of a reference on a property.

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
   
   foreach (new X as $prop => &$value) {
       var_dump($value);
   }
   
   ?>

Solutions
_________

+ Add ``&`` before the ``get`` hook.
+ Make the property a normal property, without hooks.
+ Avoid using a reference on a property hook.

Related Error Messages
______________________

+ :ref:`indirect-modification-of-%s::$%s-is-not-allowed`
