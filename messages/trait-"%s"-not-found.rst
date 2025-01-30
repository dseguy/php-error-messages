.. _trait-"%s"-not-found:

Trait "%s" not found
--------------------
 
.. meta::
	:description:
		Trait "%s" not found: This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Trait &quot;%s&quot; not found
	:og:description: This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/trait-%22%25s%22-not-found.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trait "%s" not found
	:twitter:description: Trait "%s" not found: This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trait-\"%s\"-not-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trait-\"%s\"-not-found.html","name":"Trait \"%s\" not found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jan 2025 14:58:11 +0000","dateModified":"Thu, 30 Jan 2025 14:58:11 +0000","description":"This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/trait-\"%s\"-not-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class.

PHP takes into consideration all the traits, even if they are added later than the conflict class.

Example
_______

.. code-block:: php

   <?php
   
   class X  { 
       // C is not a used trait
       use A, B { C::d insteadof E;}
   
       // E is a used trait, even if is not in the use above.
       use E;
   }
   ?>


Literal Examples
****************
+ Trait "E" not found

Solutions
_________

+ Add the missing trait.
+ Remove the missing trait and its conflict resolution.
