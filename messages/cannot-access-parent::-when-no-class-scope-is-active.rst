.. _cannot-access-parent::-when-no-class-scope-is-active:

Cannot access parent:: when no class scope is active
----------------------------------------------------
 
.. meta::
	:description:
		Cannot access parent:: when no class scope is active: ``parent`` refers to the parent class of the one.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot access parent:: when no class scope is active
	:og:description: ``parent`` refers to the parent class of the one
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-parent%3A%3A-when-no-class-scope-is-active.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot access parent:: when no class scope is active
	:twitter:description: Cannot access parent:: when no class scope is active: ``parent`` refers to the parent class of the one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-parent::-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-parent::-when-no-class-scope-is-active.html","name":"Cannot access parent:: when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"``parent`` refers to the parent class of the one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-access-parent::-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``parent`` refers to the parent class of the one. As such, ``parent`` can only be used inside a class or a trait.

Example
_______

.. code-block:: php

   <?php
   
   static::x;
   
   ?>

Solutions
_________

+ Move the code inside a method, in a trait or a class.
+ Use the full name of the class that should be used.
