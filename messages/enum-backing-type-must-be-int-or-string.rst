.. _enum-backing-type-must-be-int-or-string:

Enum backing type must be int or string
---------------------------------------
 
.. meta::
	:description:
		Enum backing type must be int or string: Backed enumeration have a name and a value for each case.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enum backing type must be int or string
	:og:description: Backed enumeration have a name and a value for each case
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-backing-type-must-be-int-or-string.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enum backing type must be int or string
	:twitter:description: Enum backing type must be int or string: Backed enumeration have a name and a value for each case
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-backing-type-must-be-int-or-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-backing-type-must-be-int-or-string.html","name":"Enum backing type must be int or string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Backed enumeration have a name and a value for each case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum-backing-type-must-be-int-or-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Backed enumeration have a name and a value for each case. The type of that value is specified next to the enumeration name, and can only by ``string`` or ``int``. All other values are forbidden.

Example
_______

.. code-block:: php

   <?php
   
   enum E: A {
       case B;
   }
   
   ?>


Literal Examples
****************
+ Enum backing type must be int or string, A given

Solutions
_________

+ Remove the type on the enumeration and its cases.
+ Use one of the valid types with the enumeration.
