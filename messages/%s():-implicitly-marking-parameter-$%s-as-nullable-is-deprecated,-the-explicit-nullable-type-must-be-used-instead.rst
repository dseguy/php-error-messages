.. _%s():-implicitly-marking-parameter-\$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead:

Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead
-----------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead: Until PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-implicitly-marking-parameter-%24%25s-as-nullable-is-deprecated%2C-the-explicit-nullable-type-must-be-used-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead
	:twitter:description: Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead: Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html","name":"Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type must be used instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.4, it is possible to use a default value of null, on a parameter that is not nullable. This special situation makes the parameter nullable: it may be omitted, or explicitely passed as null. This is a hidden type, as the null type is not explicit, yet it is fully usable.

In PHP 8.4, this is not possible anymore. For consistency reasons, the type must be explicitly displayed. Until then, it was silent.

Example
_______

.. code-block:: php

   <?php
   
   function foo(string $s = null) {}
   
   class X {
       function foo(string $s = null) {}
   }
   
   ?>


Literal Examples
****************
+ foo(): Implicitly marking parameter $s as nullable is deprecated, the explicit nullable type must be used instead
+ X::bar(): Implicitly marking parameter $s as nullable is deprecated, the explicit nullable type must be used instead

Solutions
_________

+ Add ``?`` to the type.
+ Add ``null|`` to the type.
+ Use a default value in the range of the specified type.

Related Error Messages
______________________

+ :ref:`default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `implicitNullable <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitNullable.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `implicitNullable <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitNullable.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Classes/HiddenNullable <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/HiddenNullable.html>`_.
