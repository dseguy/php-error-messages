.. _private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes:

Private methods cannot be final as they are never overridden by other classes
-----------------------------------------------------------------------------
 
.. meta::
	:description:
		Private methods cannot be final as they are never overridden by other classes: Final methods are only available in the class where they are defined.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Private methods cannot be final as they are never overridden by other classes
	:og:description: Final methods are only available in the class where they are defined
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Private methods cannot be final as they are never overridden by other classes
	:twitter:description: Private methods cannot be final as they are never overridden by other classes: Final methods are only available in the class where they are defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html","name":"Private methods cannot be final as they are never overridden by other classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Final methods are only available in the class where they are defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/private-methods-cannot-be-final-as-they-are-never-overridden-by-other-classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Final methods are only available in the class where they are defined. If such a method is defined in one of the child class, it is considered a distinct method. As such, the final keyword doesn't apply, and even is misleading.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private final function foo() {}
   }
   
   ?>

Solutions
_________

+ Remove the final keyword in the method definition.
+ Change the visibility to protected to public.
