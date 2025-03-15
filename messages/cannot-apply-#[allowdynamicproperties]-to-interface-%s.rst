.. _cannot-apply-#[allowdynamicproperties]-to-interface-%s:

Cannot apply #[AllowDynamicProperties] to interface %s
------------------------------------------------------
 
.. meta::
	:description:
		Cannot apply #[AllowDynamicProperties] to interface %s: The attribute ``AllowDynamicProperties`` has no meaning when used with a interface, even as interface can define properties.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot apply #[AllowDynamicProperties] to interface %s
	:og:description: The attribute ``AllowDynamicProperties`` has no meaning when used with a interface, even as interface can define properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-apply-%23%5Ballowdynamicproperties%5D-to-interface-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot apply #[AllowDynamicProperties] to interface %s
	:twitter:description: Cannot apply #[AllowDynamicProperties] to interface %s: The attribute ``AllowDynamicProperties`` has no meaning when used with a interface, even as interface can define properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-interface-%s.html","name":"Cannot apply #[AllowDynamicProperties] to interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Mar 2025 21:43:56 +0000","dateModified":"Wed, 12 Mar 2025 21:43:56 +0000","description":"The attribute ``AllowDynamicProperties`` has no meaning when used with a interface, even as interface can define properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-apply-#[allowdynamicproperties]-to-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The attribute ``AllowDynamicProperties`` has no meaning when used with a interface, even as interface can define properties. Apply it to any class that implements the interface.

Example
_______

.. code-block:: php

   <?php
   
   #[AllowDynamicProperties]
   interface i {}
   
   ?>


Literal Examples
****************
+ Cannot apply #[AllowDynamicProperties] to interface i

Solutions
_________

+ Use the attribute on the class that implements the interface.
