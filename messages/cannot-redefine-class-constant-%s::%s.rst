.. _cannot-redefine-class-constant-%s::%s:

Cannot redefine class constant %s::%s
-------------------------------------
 
.. meta::
	:description:
		Cannot redefine class constant %s::%s: PHP does not allow the same constant twice in the same class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redefine class constant %s::%s
	:og:description: PHP does not allow the same constant twice in the same class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redefine-class-constant-%25s%3A%3A%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redefine class constant %s::%s
	:twitter:description: Cannot redefine class constant %s::%s: PHP does not allow the same constant twice in the same class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant-%s::%s.html","name":"Cannot redefine class constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:26:12 +0000","dateModified":"Thu, 06 Aug 2026 13:25:24 +0000","description":"PHP does not allow the same constant twice in the same class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redefine-class-constant-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP does not allow the same constant twice in the same class. The constant may be declared several times in different classes, including extending or extended ones, or in trait, as each case has conflict resolution mechanisms.

Example
_______

.. code-block:: php

   <?php
   
   class C {
       const FOO = hello;
       const FOO = hello again;
   }
   
   ?>


Literal Examples
****************
+ Cannot redefine class constant C::FOO

Solutions
_________

+ Rename one of the conflicting constants.
+ Remove one of the conflicting constants.

Related Error Messages
______________________

+ :ref:`a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
