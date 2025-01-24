.. _has-#[\override]-attribute,-but-no-matching-parent-method-exists:

has #[\Override] attribute, but no matching parent method exists
----------------------------------------------------------------
 
.. meta::
	:description:
		has #[\Override] attribute, but no matching parent method exists: ``Override`` is a PHP attribute, that checks if a method is actually overriding the same method from a parent class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: has #[\Override] attribute, but no matching parent method exists
	:og:description: ``Override`` is a PHP attribute, that checks if a method is actually overriding the same method from a parent class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/has-%23%5B%5Coverride%5D-attribute%2C-but-no-matching-parent-method-exists.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: has #[\Override] attribute, but no matching parent method exists
	:twitter:description: has #[\Override] attribute, but no matching parent method exists: ``Override`` is a PHP attribute, that checks if a method is actually overriding the same method from a parent class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/has-#[\\override]-attribute,-but-no-matching-parent-method-exists.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/has-#[\\override]-attribute,-but-no-matching-parent-method-exists.html","name":"has #[\\Override] attribute, but no matching parent method exists","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jan 2025 17:25:55 +0000","dateModified":"Wed, 01 Jan 2025 17:25:55 +0000","description":"``Override`` is a PHP attribute, that checks if a method is actually overriding the same method from a parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/has-#[\\override]-attribute,-but-no-matching-parent-method-exists.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``Override`` is a PHP attribute, that checks if a method is actually overriding the same method from a parent class. This means that there should be a method in one of the parent class, that have the same name.

When no such method is found, it signals that the method with the attribute is now orphaned. It should be renamed, to fit another method.

The error is emitted when a method has the Override but no such method exists in the parent; it is also emitted when Override is used in a class or an interface that has no parent. No error is emitted on traits or enums. 

This error is a compile time error, when PHP can solve it at compile time: this means both the class with the Override attribute, and the parent class is available at compile time. It is also an execution time error, when the Override is set in a method in a trait.


Example
_______

.. code-block:: php

   <?php
   
   #[Attribute]
   class X {}
   
   class Y extends X {
   	#[Override]
   	function foo() {}
   }
   ?>

Solutions
_________

+ Remove the Override attribute.
+ Rename the current method with the name of a method in the parents.
+ Remove the method.
+ Rename one of the parent method to use the name of the current method.
