.. _attempt-to-unset-static-property-%s::\$%s:

Attempt to unset static property %s::$%s
----------------------------------------
 
.. meta::
	:description:
		Attempt to unset static property %s::$%s: It is not possible to unset a static property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Attempt to unset static property %s::$%s
	:og:description: It is not possible to unset a static property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/attempt-to-unset-static-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attempt to unset static property %s::$%s
	:twitter:description: Attempt to unset static property %s::$%s: It is not possible to unset a static property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attempt-to-unset-static-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attempt-to-unset-static-property-%s::$%s.html","name":"Attempt to unset static property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Dec 2024 10:54:14 +0000","dateModified":"Tue, 31 Dec 2024 10:54:14 +0000","description":"It is not possible to unset a static property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attempt-to-unset-static-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to unset a static property.

This applies to typed and not typed static properties. It also only applies to static properties that are already set, such as in the illustration: PHP complains about uninitialized state first, and later, about removing static properties.

This does not apply to properties, which may be removed.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public static $y = 1;
       public static int $z;
   }
   
   //Attempt to unset static property X::$x
   unset(X::$y);
   
   //Attempt to unset static property X::$z
   unset(X::$z);
   X::$z = 2;
   //Attempt to unset static property X::$x
   unset(X::$z);
   
   
   ?>


Literal Examples
****************
+ Attempt to unset static property X::$x

Solutions
_________

+ Set the property to null.
+ Set the property to a value that represents removal.

Related Error Messages
______________________

+ :ref:`typed-property-%s::$%s-must-not-be-accessed-before-initialization`
+ :ref:`typed-static-property-%s::$%s-must-not-be-accessed-before-initialization`
