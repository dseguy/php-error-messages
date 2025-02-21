.. _%s-%s-cannot-implement-previously-implemented-interface-%s:

%s %s cannot implement previously implemented interface %s
----------------------------------------------------------
 
.. meta::
	:description:
		%s %s cannot implement previously implemented interface %s: This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s %s cannot implement previously implemented interface %s
	:og:description: This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-%25s-cannot-implement-previously-implemented-interface-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s %s cannot implement previously implemented interface %s
	:twitter:description: %s %s cannot implement previously implemented interface %s: This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-cannot-implement-previously-implemented-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-%s-cannot-implement-previously-implemented-interface-%s.html","name":"%s %s cannot implement previously implemented interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-%s-cannot-implement-previously-implemented-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again. 

For enumerations, it applies to ``BackEnum`` and ``UnitEnum``, as enumerations don't have parents.

For interfaces and classes, it applies to repetitions of interfaces in the implements list. 

It doesn't apply to duplicate implements between a parent and a child class or interface.

It doesn't apply to trait, that have no relationship with interfaces.

Example
_______

.. code-block:: php

   <?php
   
   enum X implements UnitEnum {}
   
   interface J extends I, I {}
   
   class X implements I {}
   
   // This is OK
   // It is also duplicate and useless, but valid.
   class Y extends X implements I {}
   
   ?>


Literal Examples
****************
+ Enum x cannot implement previously implemented interface UnitEnum

Solutions
_________

+ Remove duplicate interfaces from the ``implements`` keyword on classes.
+ Remove duplicate interfaces from the ``extends`` keyword on interfaces.
+ Remove ``BackEnum`` and ``UnitEnum`` from the ``implements`` keyword on an enumeration.

Related Error Messages
______________________

+ :ref:`non-enum-class-%s-cannot-implement-interface-%s`
