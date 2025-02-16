.. _case-%s::%s-does-not-exist:

Case %s::%s does not exist
--------------------------
 
.. meta::
	:description:
		Case %s::%s does not exist: This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Case %s::%s does not exist
	:og:description: This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/case-%25s%3A%3A%25s-does-not-exist.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case %s::%s does not exist
	:twitter:description: Case %s::%s does not exist: This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-%s::%s-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-%s::%s-does-not-exist.html","name":"Case %s::%s does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case-%s::%s-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case.

Example
_______

.. code-block:: php

   <?php
   
   enum E {
       case a;
   }
   
   $reflectionEnum = new ReflectionEnum(E::class);
   $reflectionEnum->getCase('b');
   
   
   ?>


Literal Examples
****************
+ Case E::b does not exist

Solutions
_________

+ Make sure the case exists before trying to instantiate its relate object.
