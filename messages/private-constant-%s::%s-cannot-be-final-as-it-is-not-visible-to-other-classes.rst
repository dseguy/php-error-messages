.. _private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes:

Private constant %s::%s cannot be final as it is not visible to other classes
-----------------------------------------------------------------------------
 
.. meta::
	:description:
		Private constant %s::%s cannot be final as it is not visible to other classes: A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Private constant %s::%s cannot be final as it is not visible to other classes
	:og:description: A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/private-constant-%25s%3A%3A%25s-cannot-be-final-as-it-is-not-visible-to-other-classes.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Private constant %s::%s cannot be final as it is not visible to other classes
	:twitter:description: Private constant %s::%s cannot be final as it is not visible to other classes: A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes.html","name":"Private constant %s::%s cannot be final as it is not visible to other classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/private-constant-%s::%s-cannot-be-final-as-it-is-not-visible-to-other-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A ``private`` constant is restricted to being used by its definition class only: as such, it is not visible to other classes, including children. A ``final`` class constant cannot be overwritten by a child class. 

``private`` and ``final`` a both mutually exclusive.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private final const A = 1;
   }
   
   ?>


Literal Examples
****************
+ Private constant C::A cannot be final as it is not visible to other classes

Solutions
_________

+ Relax the private keyword with protected, or public.
+ Remove the final keyword.
