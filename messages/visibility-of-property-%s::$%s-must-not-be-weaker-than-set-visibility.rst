.. _visibility-of-property-%s::\$%s-must-not-be-weaker-than-set-visibility:

Visibility of property %s::$%s must not be weaker than set visibility
---------------------------------------------------------------------
 
.. meta::
	:description:
		Visibility of property %s::$%s must not be weaker than set visibility: When using asymmetric visibility, it is not allowed to have a weaker (public) visibility for writing than for reading (private).
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Visibility of property %s::$%s must not be weaker than set visibility
	:og:description: When using asymmetric visibility, it is not allowed to have a weaker (public) visibility for writing than for reading (private)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/visibility-of-property-%25s%3A%3A%24%25s-must-not-be-weaker-than-set-visibility.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Visibility of property %s::$%s must not be weaker than set visibility
	:twitter:description: Visibility of property %s::$%s must not be weaker than set visibility: When using asymmetric visibility, it is not allowed to have a weaker (public) visibility for writing than for reading (private)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/visibility-of-property-%s::$%s-must-not-be-weaker-than-set-visibility.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/visibility-of-property-%s::$%s-must-not-be-weaker-than-set-visibility.html","name":"Visibility of property %s::$%s must not be weaker than set visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 29 Dec 2024 11:24:46 +0000","dateModified":"Sun, 29 Dec 2024 11:24:46 +0000","description":"When using asymmetric visibility, it is not allowed to have a weaker (public) visibility for writing than for reading (private)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/visibility-of-property-%s::$%s-must-not-be-weaker-than-set-visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When using asymmetric visibility, it is not allowed to have a weaker (public) visibility for writing than for reading (private). This would be akin to a variable which can be written from the public scope, which is accessible to the class, but not read from that scope. As such, the set visibility must be at most the same than the get one. 

Using the same level of visibility with both options is possible, although useless. 


Example
_______

.. code-block:: php

   <?php
   
   class X {
      private public(set) string $p;
   
   	// valid but useless
      //protected protected(set) string $p;
   
   	// valid
      public public(set) string $p;
   }
   
   ?>


Literal Examples
****************
+ Visibility of property x::$p must not be weaker than set visibility

Solutions
_________

+ Make the property private, and set up an accessor method.
+ Use the magic methods __get and __set to set up that kind of feature.
