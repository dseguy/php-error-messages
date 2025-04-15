.. _case-%s-of-backed-enum-%s-must-have-a-value:

Case %s of backed enum %s must have a value
-------------------------------------------
 
.. meta::
	:description:
		Case %s of backed enum %s must have a value: In a backed enumeration, all the cases must have a value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Case %s of backed enum %s must have a value
	:og:description: In a backed enumeration, all the cases must have a value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/case-%25s-of-backed-enum-%25s-must-have-a-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case %s of backed enum %s must have a value
	:twitter:description: Case %s of backed enum %s must have a value: In a backed enumeration, all the cases must have a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-%s-of-backed-enum-%s-must-have-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-%s-of-backed-enum-%s-must-have-a-value.html","name":"Case %s of backed enum %s must have a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 15 Apr 2025 19:58:38 +0000","dateModified":"Tue, 15 Apr 2025 19:58:38 +0000","description":"In a backed enumeration, all the cases must have a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case-%s-of-backed-enum-%s-must-have-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In a backed enumeration, all the cases must have a value. There are no default values for cases, not automatic assignation. This applies to both ``int`` and ``string`` enumerations.

Example
_______

.. code-block:: php

   <?php
   
   enum E: int {
       case A = 1;
       case B;
   }
   
   ?>


Literal Examples
****************
+ Case B of backed enum E must have a value

Solutions
_________

+ Add all the missing values to the cases.
+ Remove the type of the enum.
