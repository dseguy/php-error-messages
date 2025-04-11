.. _trying-to-clone-an-uncloneable-object-of-class-%s:

Trying to clone an uncloneable object of class %s
-------------------------------------------------
 
.. meta::
	:description:
		Trying to clone an uncloneable object of class %s: It is not possible to instantiate an enumeration.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Trying to clone an uncloneable object of class %s
	:og:description: It is not possible to instantiate an enumeration
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/trying-to-clone-an-uncloneable-object-of-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trying to clone an uncloneable object of class %s
	:twitter:description: Trying to clone an uncloneable object of class %s: It is not possible to instantiate an enumeration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trying-to-clone-an-uncloneable-object-of-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trying-to-clone-an-uncloneable-object-of-class-%s.html","name":"Trying to clone an uncloneable object of class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is not possible to instantiate an enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/trying-to-clone-an-uncloneable-object-of-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to instantiate an enumeration. It is also not possible to clone its cases. The only usage is to access the ``cases`` of the enumeration: they are directly the expected objects.

Example
_______

.. code-block:: php

   <?php
   
   enum E {
       case A;
   }
   
   clone E::A;
   
   ?>


Literal Examples
****************
+ Trying to clone an uncloneable object of class e

Solutions
_________

+ Use the case ``E::A`` (don't mistake it with a class constant).
