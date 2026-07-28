.. _type-%s-is-redundant-with-type-%s:

Type %s is redundant with type %s
---------------------------------
 
.. meta::
	:description:
		Type %s is redundant with type %s: In a DNF (Disjunctive Normal Form) type, two intersection groups can look textually different while describing the exact same combination of types once names are resolved.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type %s is redundant with type %s
	:og:description: In a DNF (Disjunctive Normal Form) type, two intersection groups can look textually different while describing the exact same combination of types once names are resolved
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-%25s-is-redundant-with-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type %s is redundant with type %s
	:twitter:description: Type %s is redundant with type %s: In a DNF (Disjunctive Normal Form) type, two intersection groups can look textually different while describing the exact same combination of types once names are resolved
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-is-redundant-with-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-is-redundant-with-type-%s.html","name":"Type %s is redundant with type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:48 +0000","dateModified":"Mon, 27 Jul 2026 16:18:48 +0000","description":"In a DNF (Disjunctive Normal Form) type, two intersection groups can look textually different while describing the exact same combination of types once names are resolved","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-%s-is-redundant-with-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In a DNF (Disjunctive Normal Form) type, two intersection groups can look textually different while describing the exact same combination of types once names are resolved. Here, ``B`` is only a local alias for ``A`` (introduced by ``use A as B;``), so ``X&A`` and ``X&B`` are, in fact, the very same intersection written twice.

PHP resolves ``use`` aliases at compile time, notices that the second group adds nothing over the first, and reports it as redundant.

Example
_______

.. code-block:: php

   <?php
   
   interface X {}
   
   use A as B;
   
   function foo(): (X&A)|(X&B) {}
   
   ?>


Literal Examples
****************
+ Type X&A is redundant with type X&A

Solutions
_________

+ Remove the duplicated intersection group.
+ Use the class's real name consistently, instead of mixing the name and its alias.

Related Error Messages
______________________

+ :ref:`type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s`
+ :ref:`duplicate-type-%s-is-redundant`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
