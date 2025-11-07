.. _cannot-use-the-final-modifier-on-a-parameter:

Cannot use the final modifier on a parameter
--------------------------------------------
 
.. meta::
	:description:
		Cannot use the final modifier on a parameter: The ``final`` option is not available for promoted properties, until PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use the final modifier on a parameter
	:og:description: The ``final`` option is not available for promoted properties, until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-final-modifier-on-a-parameter.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use the final modifier on a parameter
	:twitter:description: Cannot use the final modifier on a parameter: The ``final`` option is not available for promoted properties, until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-final-modifier-on-a-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-the-final-modifier-on-a-parameter.html","name":"Cannot use the final modifier on a parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 21:00:37 +0000","dateModified":"Fri, 07 Nov 2025 21:00:37 +0000","description":"The ``final`` option is not available for promoted properties, until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-the-final-modifier-on-a-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``final`` option is not available for promoted properties, until PHP 8.5. Until then, the property shall be ``final`` but not ``promoted``, or it has to be declared the traditional way.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __construct( 
           public final int $i
       ) {}
   }
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.5 or more recent.
+ Remove the final property from the promoted property.
+ Create the property in the class body.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
