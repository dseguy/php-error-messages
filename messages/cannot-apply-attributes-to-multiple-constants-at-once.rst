.. _cannot-apply-attributes-to-multiple-constants-at-once:

Cannot apply attributes to multiple constants at once
-----------------------------------------------------
 
.. meta::
	:description:
		Cannot apply attributes to multiple constants at once: It is not possible to use attributes on global constants, when several constants are defined at the same time.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot apply attributes to multiple constants at once
	:og:description: It is not possible to use attributes on global constants, when several constants are defined at the same time
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-apply-attributes-to-multiple-constants-at-once.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot apply attributes to multiple constants at once
	:twitter:description: Cannot apply attributes to multiple constants at once: It is not possible to use attributes on global constants, when several constants are defined at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-attributes-to-multiple-constants-at-once.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-attributes-to-multiple-constants-at-once.html","name":"Cannot apply attributes to multiple constants at once","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 20:17:57 +0000","dateModified":"Sun, 16 Nov 2025 20:17:57 +0000","description":"It is not possible to use attributes on global constants, when several constants are defined at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-apply-attributes-to-multiple-constants-at-once.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to use attributes on global constants, when several constants are defined at the same time. That syntax is possible with class constants, but not with global constants.

Example
_______

.. code-block:: php

   <?php
   
   #[Foo]
   const A = 1,
         B = 2;
   
   ?>

Solutions
_________

+ Split the constant definitions, and apply the same attribute to each of them.
+ Convert the global constants to class constants.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
