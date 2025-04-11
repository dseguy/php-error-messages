.. _cannot-redeclare-%s-property-%s::\$%s-as-%s-%s::\$%s:

Cannot redeclare %s property %s::$%s as %s %s::$%s
--------------------------------------------------
 
.. meta::
	:description:
		Cannot redeclare %s property %s::$%s as %s %s::$%s: A property must be always ``readonly`` or non-readonly, in every classes of the same family.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare %s property %s::$%s as %s %s::$%s
	:og:description: A property must be always ``readonly`` or non-readonly, in every classes of the same family
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-%25s-property-%25s%3A%3A%24%25s-as-%25s-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare %s property %s::$%s as %s %s::$%s
	:twitter:description: Cannot redeclare %s property %s::$%s as %s %s::$%s: A property must be always ``readonly`` or non-readonly, in every classes of the same family
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s.html","name":"Cannot redeclare %s property %s::$%s as %s %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A property must be always ``readonly`` or non-readonly, in every classes of the same family","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A property must be always ``readonly`` or non-readonly, in every classes of the same family. It cannot alternate between the two options, with inheritance.

The same applies also to the ``static`` option of properties.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private readonly $property;
   }
   
   class Y extends X {
       private $property;
   }
   
   ?>


Literal Examples
****************
+ Cannot redeclare readonly property X::$property as non-readonly Y::$property
+ Cannot redeclare non-readonly property X::$property as readonly Y::$property
+ Cannot redeclare static property X::$property as non-static Y::$property
+ Cannot redeclare non-static property X::$property as static Y::$property

Solutions
_________

+ Make all the property definitions ``readonly``.
+ Make all the property definitions non-``readonly``.
+ Remove some the conflicting property definitions.
