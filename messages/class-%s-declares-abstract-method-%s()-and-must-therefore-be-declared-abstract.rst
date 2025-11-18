.. _class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract:

Class %s declares abstract method %s() and must therefore be declared abstract
------------------------------------------------------------------------------
 
.. meta::
	:description:
		Class %s declares abstract method %s() and must therefore be declared abstract: A class that contains an ``abstract`` method must also be declared ``abstract``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s declares abstract method %s() and must therefore be declared abstract
	:og:description: A class that contains an ``abstract`` method must also be declared ``abstract``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-declares-abstract-method-%25s%28%29-and-must-therefore-be-declared-abstract.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s declares abstract method %s() and must therefore be declared abstract
	:twitter:description: Class %s declares abstract method %s() and must therefore be declared abstract: A class that contains an ``abstract`` method must also be declared ``abstract``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract.html","name":"Class %s declares abstract method %s() and must therefore be declared abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 20:23:04 +0000","dateModified":"Sun, 16 Nov 2025 20:23:04 +0000","description":"A class that contains an ``abstract`` method must also be declared ``abstract``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A class that contains an ``abstract`` method must also be declared ``abstract``.

Example
_______

.. code-block:: php

   <?php
   
   class A {
       abstract function foo() ;
   }
   
   ?>

Solutions
_________

+ Remove the ``abstract`` method.
+ Remove the ``abstract`` option on the method and give it a body.
+ Add the ``abstract`` option to the class.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
