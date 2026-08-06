.. _%s::\$%s-has-#[--override]-attribute:

%s::$%s has #[\\Override] attribute
-----------------------------------
 
.. meta::
	:description:
		%s::$%s has #[\\Override] attribute: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s::$%s has #[\\Override] attribute
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%24%25s-has-%23%5B--override%5D-attribute.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s::$%s has #[\\Override] attribute
	:twitter:description: %s::$%s has #[\\Override] attribute: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::$%s-has-#[--override]-attribute.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::$%s-has-#[--override]-attribute.html","name":"%s::$%s has #[\\\\Override] attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:18:48 +0000","dateModified":"Wed, 05 Aug 2026 14:18:48 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s::$%s-has-#[--override]-attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.5 extends the ``#[\Override]`` attribute, previously usable only on methods, so that it can also be applied to properties. It tells the engine that the property is expected to override a property of the same name declared in a parent class or an implemented interface, so that the engine can check that this is really the case.

Here, ``Y::$b`` is marked as overriding, but ``X`` (the parent of ``Y``) has no ``$b`` property at all -- only ``$a``. Since there is nothing to override, the attribute is meaningless, and PHP reports it as an error at compile time. The full message continues with ', but no matching parent property exists'.

This error is also raised when the class using the attribute has no parent at all, or when the property is declared in a trait whose using class has no matching parent property.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public int $a = 1;
   }
   
   class Y extends X {
       #[\Override]
       public int $b = 2;
   }
   
   ?>


Literal Examples
****************
+ Y::$b has #[\Override] attribute, but no matching parent property exists

Solutions
_________

+ Remove the ``#[\Override]`` attribute.
+ Rename the property to match the name used by the parent class or interface.
+ Add the property, with the same name, to the parent class.

Related Error Messages
______________________

+ :ref:`%s::%s()-has-#[-override]-attribute,-but-no-matching-parent-method-exists`
+ :ref:`has-#[-override]-attribute,-but-no-matching-parent-method-exists`
+ :ref:`%s::%s-has-#[--override]-attribute`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `overrideAttributeOnProperty85 <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/overrideAttributeOnProperty85.html>`_.
