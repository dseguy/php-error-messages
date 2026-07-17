.. _%s-%s-must-implement-%d-abstract-method%s-(:

%s %s must implement %d abstract method%s (
-------------------------------------------
 
.. meta::
	:description:
		%s %s must implement %d abstract method%s (: An enum, or an anonymous class, that does not provide a body for one or more of its abstract methods -- inherited via an implemented interface -- must implement all of them, since, unlike an ordinary class, neither an enum nor an anonymous class can be declared ``abstract`` to defer the implementation.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s %s must implement %d abstract method%s (
	:og:description: An enum, or an anonymous class, that does not provide a body for one or more of its abstract methods -- inherited via an implemented interface -- must implement all of them, since, unlike an ordinary class, neither an enum nor an anonymous class can be declared ``abstract`` to defer the implementation
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-must-implement-%25d-abstract-method%25s-%28.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s %s must implement %d abstract method%s (
	:twitter:description: %s %s must implement %d abstract method%s (: An enum, or an anonymous class, that does not provide a body for one or more of its abstract methods -- inherited via an implemented interface -- must implement all of them, since, unlike an ordinary class, neither an enum nor an anonymous class can be declared ``abstract`` to defer the implementation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-must-implement-%d-abstract-method%s-(.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-must-implement-%d-abstract-method%s-(.html","name":"%s %s must implement %d abstract method%s (","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 20:55:10 +0000","dateModified":"Fri, 17 Jul 2026 20:55:10 +0000","description":"An enum, or an anonymous class, that does not provide a body for one or more of its abstract methods -- inherited via an implemented interface -- must implement all of them, since, unlike an ordinary class, neither an enum nor an anonymous class can be declared ``abstract`` to defer the implementation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-%s-must-implement-%d-abstract-method%s-(.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An enum, or an anonymous class, that does not provide a body for one or more of its abstract methods -- inherited via an implemented interface -- must implement all of them, since, unlike an ordinary class, neither an enum nor an anonymous class can be declared ``abstract`` to defer the implementation.

The message lists every abstract method that is still missing a concrete implementation, up to three of them; when there are more, the list ends with ``...``.

This is the templated, general-purpose version of the message: the first ``%s`` is replaced by the kind of structure (``Enum`` or ``Class``, the latter for anonymous classes), the second by its name.

Before PHP 8.5, anonymous classes used the generic ``%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (...)`` message instead of this one, since only enums had this dedicated message. Also, before PHP 8.5, the wording for enums included the word 'private' (``must implement %d abstract private method%s``), which was corrected.

Example
_______

.. code-block:: php

   <?php
   
   interface Colorful {
       function color();
   }
   
   enum Suit implements Colorful {
       case Hearts;
   }
   
   ?>


Literal Examples
****************
+ Enum Suit must implement 1 abstract method (Colorful::color)
+ Class Colorful@anonymous must implement 1 abstract method (Colorful::color)

Solutions
_________

+ Implement the missing method(s), with a body, in the enum or the anonymous class.
+ Remove the ``implements`` clause that brings in the abstract method.

Related Error Messages
______________________

+ :ref:`%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(`
+ :ref:`class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods`
+ :ref:`anonymous-class-method-%s()-must-not-be-abstract`
+ :ref:`%s-method-%s::%s()-must-not-be-abstract`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `New in PHP 8.5 for anonymous classes, which previously used the generic 'contains ... abstract method ... must therefore be declared abstract' message. The wording for enums also changed in PHP 8.5: it used to read 'must implement %d abstract private method%s'. <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/New in PHP 8.5 for anonymous classes, which previously used the generic 'contains ... abstract method ... must therefore be declared abstract' message. The wording for enums also changed in PHP 8.5: it used to read 'must implement %d abstract private method%s'..html>`_.
