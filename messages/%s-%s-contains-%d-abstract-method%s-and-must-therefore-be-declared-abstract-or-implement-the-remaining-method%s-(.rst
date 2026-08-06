.. _%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(:

%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (
-----------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (: A class (or a trait, once it is used in a class) that does not provide a body for one or more of its abstract methods -- inherited from a parent class, or required by an implemented interface -- must itself be declared ``abstract``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (
	:og:description: A class (or a trait, once it is used in a class) that does not provide a body for one or more of its abstract methods -- inherited from a parent class, or required by an implemented interface -- must itself be declared ``abstract``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-contains-%25d-abstract-method%25s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%25s-%28.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (
	:twitter:description: %s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (: A class (or a trait, once it is used in a class) that does not provide a body for one or more of its abstract methods -- inherited from a parent class, or required by an implemented interface -- must itself be declared ``abstract``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(.html","name":"%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:18:38 +0000","dateModified":"Wed, 05 Aug 2026 14:18:38 +0000","description":"A class (or a trait, once it is used in a class) that does not provide a body for one or more of its abstract methods -- inherited from a parent class, or required by an implemented interface -- must itself be declared ``abstract``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A class (or a trait, once it is used in a class) that does not provide a body for one or more of its abstract methods -- inherited from a parent class, or required by an implemented interface -- must itself be declared ``abstract``. Otherwise PHP has no concrete implementation to call when the method is invoked, and it stops with a fatal error while linking the class.

The message lists every abstract method that is still missing a concrete implementation, up to three of them; when there are more, the list ends with ``...``.

This is the templated, general-purpose version of the message: the first ``%s`` is replaced by the kind of structure (``Class`` or ``Interface``), the second by its name.

Since PHP 8.5, enums and anonymous classes no longer use this message: they get the dedicated ``%s %s must implement %d abstract method%s (...)`` message instead, since neither of them can be declared abstract.

Example
_______

.. code-block:: php

   <?php
   
   interface Colorful {
       function color();
   }
   
   class Suit implements Colorful {
   }
   
   ?>


Literal Examples
****************
+ Class Suit contains 1 abstract method and must therefore be declared abstract or implement the remaining method (Colorful::color)

Solutions
_________

+ Implement the missing method(s), with a body, in the class.
+ Declare the class ``abstract``.
+ Remove the ``implements``/``extends`` clause that brings in the abstract method.

Related Error Messages
______________________

+ :ref:`class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods`
+ :ref:`class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract`
+ :ref:`%s-%s-must-implement-%d-abstract-method%s-(`
+ :ref:`anonymous-class-method-%s()-must-not-be-abstract`
+ :ref:`non-abstract-method-%s::%s()-must-contain-body`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `abstractMethodMessageSplit85 <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/abstractMethodMessageSplit85.html>`_.
