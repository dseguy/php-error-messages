.. _cannot-apply-#[allowdynamicproperties]-to-trait-%s:

Cannot apply #[AllowDynamicProperties] to trait %s
--------------------------------------------------
 
.. meta::
	:description:
		Cannot apply #[AllowDynamicProperties] to trait %s: The attribute ``AllowDynamicProperties`` has no meaning when used with a trait, even as traits can defined properties.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot apply #[AllowDynamicProperties] to trait %s
	:og:description: The attribute ``AllowDynamicProperties`` has no meaning when used with a trait, even as traits can defined properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-apply-%23%5Ballowdynamicproperties%5D-to-trait-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot apply #[AllowDynamicProperties] to trait %s
	:twitter:description: Cannot apply #[AllowDynamicProperties] to trait %s: The attribute ``AllowDynamicProperties`` has no meaning when used with a trait, even as traits can defined properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-trait-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-trait-%s.html","name":"Cannot apply #[AllowDynamicProperties] to trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 18:59:50 +0000","description":"The attribute ``AllowDynamicProperties`` has no meaning when used with a trait, even as traits can defined properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-trait-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The attribute ``AllowDynamicProperties`` has no meaning when used with a trait, even as traits can defined properties. Apply it to any class that uses the trait.

Example
_______

.. code-block:: php

   <?php
   
   #[AllowDynamicProperties]
   trait T {}
   
   ?>


Literal Examples
****************
+ Cannot apply #[AllowDynamicProperties] to trait t

Solutions
_________

+ Use the attribute on the class that use the trait.
