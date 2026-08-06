.. _cannot-use-trait-%s:

Cannot use trait %s
-------------------
 
.. meta::
	:description:
		Cannot use trait %s: An enum&#039;s cases and its constants share a single namespace: a case and a constant cannot have the same name, whether the constant is declared directly in the enum or brought in through a trait.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use trait %s
	:og:description: An enum&#039;s cases and its constants share a single namespace: a case and a constant cannot have the same name, whether the constant is declared directly in the enum or brought in through a trait
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-trait-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use trait %s
	:twitter:description: Cannot use trait %s: An enum's cases and its constants share a single namespace: a case and a constant cannot have the same name, whether the constant is declared directly in the enum or brought in through a trait
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-trait-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-trait-%s.html","name":"Cannot use trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:21:25 +0000","dateModified":"Thu, 06 Aug 2026 13:21:25 +0000","description":"An enum's cases and its constants share a single namespace: a case and a constant cannot have the same name, whether the constant is declared directly in the enum or brought in through a trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-trait-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An enum's cases and its constants share a single namespace: a case and a constant cannot have the same name, whether the constant is declared directly in the enum or brought in through a trait.

Here, the trait ``HasColor`` declares a constant called ``Red``, and the enum also declares a case called ``Red``; composing the enum with the trait would leave two different things answering to the same name, so PHP refuses to use the trait.

This entry records only the first sentence of the actual engine message, which continues with ``, because %s::%s conflicts with enum case %s::%s``, naming the trait, the constant, the enum and the case involved.

Example
_______

.. code-block:: php

   <?php
   
   trait HasColor {
       const Red = 'red';
   }
   
   enum Color {
       use HasColor;
   
       case Red;
   }
   
   ?>


Literal Examples
****************
+ Cannot use trait HasColor, because HasColor::Red conflicts with enum case Color::Red

Solutions
_________

+ Rename the constant in the trait so it no longer collides with the enum case.
+ Rename the conflicting case in the enum.
+ Stop using the trait in this enum, and declare the constant directly in the enum, merging it with the case some other way.

Related Error Messages
______________________

+ :ref:`%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
