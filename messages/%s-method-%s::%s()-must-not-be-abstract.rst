.. _%s-method-%s::%s()-must-not-be-abstract:

%s method %s::%s() must not be abstract
---------------------------------------
 
.. meta::
	:description:
		%s method %s::%s() must not be abstract: Interface methods are implicitly abstract: they never carry a body, since an interface only declares a contract.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s method %s::%s() must not be abstract
	:og:description: Interface methods are implicitly abstract: they never carry a body, since an interface only declares a contract
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-method-%25s%3A%3A%25s%28%29-must-not-be-abstract.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s method %s::%s() must not be abstract
	:twitter:description: %s method %s::%s() must not be abstract: Interface methods are implicitly abstract: they never carry a body, since an interface only declares a contract
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-method-%s::%s()-must-not-be-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-method-%s::%s()-must-not-be-abstract.html","name":"%s method %s::%s() must not be abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 20:55:41 +0000","dateModified":"Fri, 17 Jul 2026 20:55:41 +0000","description":"Interface methods are implicitly abstract: they never carry a body, since an interface only declares a contract","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-method-%s::%s()-must-not-be-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Interface methods are implicitly abstract: they never carry a body, since an interface only declares a contract. Writing the ``abstract`` keyword explicitly on an interface method is therefore redundant, and PHP rejects it.

The same message is used for enums, since 8.5: an enum can never be declared ``abstract``, so none of its own methods can be ``abstract`` either (its cases are not classes that could provide the missing implementation).

This is the templated, general-purpose version of the message: the first ``%s`` is replaced by the kind of structure (``Interface`` or ``Enum``), the second and third by the class name and the method name.

Before PHP 8.5, declaring an ``abstract`` method directly inside an enum body produced the generic ``%s %s must implement %d abstract method%s (...)`` message instead of this dedicated one.

Example
_______

.. code-block:: php

   <?php
   
   interface Colorful {
       abstract function color();
   }
   
   ?>


Literal Examples
****************
+ Interface method Colorful::color() must not be abstract
+ Enum method Suit::foo() must not be abstract

Solutions
_________

+ Remove the ``abstract`` keyword from the method declaration.
+ If the method needs a real implementation, give it a body instead of declaring it ``abstract``.

Related Error Messages
______________________

+ :ref:`anonymous-class-method-%s()-must-not-be-abstract`
+ :ref:`class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract`
+ :ref:`%s-%s-must-implement-%d-abstract-method%s-(`
+ :ref:`interface-%s-cannot-contain-non-abstract-method-%s()`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `Since PHP 8.5, this dedicated message also applies to enums; before that, an abstract method declared directly in an enum triggered the generic 'must implement N abstract method(s)' message. <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/Since PHP 8.5, this dedicated message also applies to enums; before that, an abstract method declared directly in an enum triggered the generic 'must implement N abstract method(s)' message..html>`_.
