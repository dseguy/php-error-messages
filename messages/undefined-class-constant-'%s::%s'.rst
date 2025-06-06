.. _undefined-class-constant-'%s::%s':

Undefined class constant '%s::%s'
---------------------------------
 
.. meta::
	:description:
		Undefined class constant '%s::%s': The requested class constant doesn&#039;t exist.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined class constant &#039;%s::%s&#039;
	:og:description: The requested class constant doesn&#039;t exist
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-class-constant-%27%25s%3A%3A%25s%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined class constant '%s::%s'
	:twitter:description: Undefined class constant '%s::%s': The requested class constant doesn't exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-class-constant-'%s::%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/undefined-class-constant-'%s::%s'.html","name":"Undefined class constant '%s::%s'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The requested class constant doesn't exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/undefined-class-constant-'%s::%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The requested class constant doesn't exist.

In the case of an enumeration, this error message is also displayed for the cases: they do have the same syntax, so it is not possible to know if it is a constant or a case.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   echo X::Y; 
   
   enum E { case A;}
   
   echo E::B;
   
   ?>


Literal Examples
****************
+ Undefined class constant 'x::Y'
+ Undefined class constant 'e::B'

Solutions
_________

+ Find the actual name of the requested class constant.
+ Find the actual class of the requested class constant.
+ Define the class constant in the class, or its traits, interfaces or parents.


In more recent PHP versions, this error message is now :ref:`undefined-constant-%s::%s`.
