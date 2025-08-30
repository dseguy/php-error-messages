.. _static-property-may-not-have-asymmetric-visibility:

Static property may not have asymmetric visibility
--------------------------------------------------
 
.. meta::
	:description:
		Static property may not have asymmetric visibility: Asymmetric visibility is only applicable to object properties, not static properties.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Static property may not have asymmetric visibility
	:og:description: Asymmetric visibility is only applicable to object properties, not static properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/static-property-may-not-have-asymmetric-visibility.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static property may not have asymmetric visibility
	:twitter:description: Static property may not have asymmetric visibility: Asymmetric visibility is only applicable to object properties, not static properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static-property-may-not-have-asymmetric-visibility.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/static-property-may-not-have-asymmetric-visibility.html","name":"Static property may not have asymmetric visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 30 Aug 2025 21:04:52 +0000","dateModified":"Sat, 30 Aug 2025 21:04:52 +0000","description":"Asymmetric visibility is only applicable to object properties, not static properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/static-property-may-not-have-asymmetric-visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Asymmetric visibility is only applicable to object properties, not static properties.

Example
_______

.. code-block:: php

   <?php
   class X {
       static private(set) $p = 1;
   }
   ?>

Solutions
_________

+ Make the property non-static.
+ Remove the asymmetric visibility.
