.. _duplicate-value-in-enum-%s-for-cases-%s-and-%s:

Duplicate value in enum %s for cases %s and %s
----------------------------------------------
 
.. meta::
	:description:
		Duplicate value in enum %s for cases %s and %s: When an enumeration is backed, either string or int, the values used in the cases must all be distinct.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Duplicate value in enum %s for cases %s and %s
	:og:description: When an enumeration is backed, either string or int, the values used in the cases must all be distinct
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/duplicate-value-in-enum-%25s-for-cases-%25s-and-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate value in enum %s for cases %s and %s
	:twitter:description: Duplicate value in enum %s for cases %s and %s: When an enumeration is backed, either string or int, the values used in the cases must all be distinct
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-value-in-enum-%s-for-cases-%s-and-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-value-in-enum-%s-for-cases-%s-and-%s.html","name":"Duplicate value in enum %s for cases %s and %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 15 Apr 2025 19:55:01 +0000","dateModified":"Tue, 15 Apr 2025 19:55:01 +0000","description":"When an enumeration is backed, either string or int, the values used in the cases must all be distinct","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/duplicate-value-in-enum-%s-for-cases-%s-and-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When an enumeration is backed, either string or int, the values used in the cases must all be distinct. There cannot be any duplicate value. This problem is only reported at execution time, when one of the cases is used.

Example
_______

.. code-block:: php

   <?php
   
   enum E: int {
       case A = 1;
       case B = 1;
   }
   
   E::A;
   
   ?>


Literal Examples
****************
+ Duplicate value in enum E for cases A and B

Solutions
_________

+ Make sure all the cases are distinct.
