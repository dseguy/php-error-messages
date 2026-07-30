.. _cannot-create-closure-for-parent-property-hook-call:

Cannot create Closure for parent property hook call
---------------------------------------------------
 
.. meta::
	:description:
		Cannot create Closure for parent property hook call: parent::$property::get() (and ::set()) is dedicated syntax, resolved at compile time, that invokes the property hook implementation the current class overrides.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot create Closure for parent property hook call
	:og:description: parent::$property::get() (and ::set()) is dedicated syntax, resolved at compile time, that invokes the property hook implementation the current class overrides
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-create-closure-for-parent-property-hook-call.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot create Closure for parent property hook call
	:twitter:description: Cannot create Closure for parent property hook call: parent::$property::get() (and ::set()) is dedicated syntax, resolved at compile time, that invokes the property hook implementation the current class overrides
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-for-parent-property-hook-call.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-for-parent-property-hook-call.html","name":"Cannot create Closure for parent property hook call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:38 +0000","dateModified":"Thu, 30 Jul 2026 07:29:38 +0000","description":"parent::$property::get() (and ::set()) is dedicated syntax, resolved at compile time, that invokes the property hook implementation the current class overrides","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-for-parent-property-hook-call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
parent::$property::get() (and ::set()) is dedicated syntax, resolved at compile time, that invokes the property hook implementation the current class overrides. It does not correspond to a standalone, independently callable method the way parent::method() does, so it cannot be captured as a first-class callable / Closure.

Example
_______

.. code-block:: php

   <?php
   
   class Base {
   	public string $name = '' {
   		get => $this->name;
   	}
   }
   
   class Child extends Base {
   	public string $name = '' {
   		get {
   			$fn = parent::$name::get(...);
   			return $fn();
   		}
   	}
   }
   
   ?>

Solutions
_________

+ Call the parent hook directly instead of turning it into a Closure: parent::$name::get().
+ Wrap the call yourself in an ordinary closure: $fn = fn() => parent::$name::get();

Related Error Messages
______________________

+ :ref:`cannot-use-the-static-modifier-on-a-property-hook`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
