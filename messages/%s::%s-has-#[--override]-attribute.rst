.. _%s::%s-has-#[--override]-attribute:

%s::%s has #[\\Override] attribute
----------------------------------
 
.. meta::
	:description:
		%s::%s has #[\\Override] attribute: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s::%s has #[\\Override] attribute
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%25s-has-%23%5B--override%5D-attribute.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s::%s has #[\\Override] attribute
	:twitter:description: %s::%s has #[\\Override] attribute: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::%s-has-#[--override]-attribute.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::%s-has-#[--override]-attribute.html","name":"%s::%s has #[\\\\Override] attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:13:56 +0000","dateModified":"Tue, 04 Aug 2026 19:13:56 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s::%s-has-#[--override]-attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.6 extends the ``#[\Override]`` attribute, previously usable only on methods and properties, to class constants and enum cases, the later being internally a special kind of class constant. It tells the engine that the constant is expected to override a constant of the same name declared in a parent class or an implemented interface, so that the engine can check that this is really the case.

Here, ``Square::COLOR`` is marked as overriding, but ``Shape``, the interface ``Square`` implements, only declares ``SIDES``, not ``COLOR``. Since there is nothing to override, the attribute is meaningless, and PHP reports it as an error at compile time. The full message continues with ', but no matching parent constant exists'.

Only public and protected constants of a parent class or implemented interface satisfy the attribute; private constants do not count. This error is also raised when the class using the attribute has no parent and implements no interface at all.

Example
_______

.. code-block:: php

   <?php
   
   interface Shape {
       const SIDES = 0;
   }
   
   class Square implements Shape {
       #[\Override]
       const SIDES = 4; // Fine, overrides Shape::SIDES
   
       #[\Override]
       const COLOR = 'blue'; // Fatal error, no matching parent constant
   }
   
   ?>


Literal Examples
****************
+ Square::COLOR has #[\Override] attribute, but no matching parent constant exists

Solutions
_________

+ Remove the ``#[\Override]`` attribute.
+ Rename the constant, or enum case, to match one declared in a parent class or interface.
+ Add a constant with the same name to the parent class or interface.

Related Error Messages
______________________

+ :ref:`%s::%s()-has-#[-override]-attribute,-but-no-matching-parent-method-exists`
+ :ref:`%s::$%s-has-#[--override]-attribute`
+ :ref:`%s::%s-has-#[--override]-attribute`
+ :ref:`has-#[-override]-attribute,-but-no-matching-parent-method-exists`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `New in PHP 8.6: the #[\Override] attribute could previously only target methods (8.3+) and properties (8.5+); PHP 8.6 allows it on class constants and enum cases too. <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/New in PHP 8.6: the #[\Override] attribute could previously only target methods (8.3+) and properties (8.5+); PHP 8.6 allows it on class constants and enum cases too..html>`_.
