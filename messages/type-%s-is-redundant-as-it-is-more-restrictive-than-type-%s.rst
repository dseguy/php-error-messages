.. _type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s:

Type %s is redundant as it is more restrictive than type %s
-----------------------------------------------------------
 
.. meta::
	:description:
		Type %s is redundant as it is more restrictive than type %s: DNF (Disjunctive Normal Form) types, added in PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Type %s is redundant as it is more restrictive than type %s
	:og:description: DNF (Disjunctive Normal Form) types, added in PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/type-%25s-is-redundant-as-it-is-more-restrictive-than-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type %s is redundant as it is more restrictive than type %s
	:twitter:description: Type %s is redundant as it is more restrictive than type %s: DNF (Disjunctive Normal Form) types, added in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html","name":"Type %s is redundant as it is more restrictive than type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:44 +0000","dateModified":"Mon, 27 Jul 2026 16:18:44 +0000","description":"DNF (Disjunctive Normal Form) types, added in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
DNF (Disjunctive Normal Form) types, added in PHP 8.2, allow an intersection group to be combined inside a union, as in ``(A&B)|C``. If one of the union's plain members already appears on its own, here ``A``, then any intersection group built from that same name, such as ``A&B``, cannot accept any value beyond what ``A`` alone already accepts: satisfying ``A&B`` always implies satisfying ``A``.

PHP detects this purely by comparing the type names in the declaration, without loading any class, and rejects the more restrictive branch as dead code.

Example
_______

.. code-block:: php

   <?php
   
   interface A {}
   interface B {}
   
   function test(): (A&B)|A {}
   
   ?>


Literal Examples
****************
+ Type A&B is redundant as it is more restrictive than type A

Solutions
_________

+ Remove the redundant intersection group, and keep only the broader standalone type.
+ If the intersection group was meant to be independent, use a type that is not already implied by one of the union's other members.

Related Error Messages
______________________

+ :ref:`type-%s-is-redundant-with-type-%s`
+ :ref:`duplicate-type-%s-is-redundant`
+ :ref:`type-%s-contains-both-object-and-a-class-type`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
