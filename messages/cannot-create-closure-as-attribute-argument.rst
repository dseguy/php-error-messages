.. _cannot-create-closure-as-attribute-argument:

Cannot create Closure as attribute argument
-------------------------------------------
 
.. meta::
	:description:
		Cannot create Closure as attribute argument: It is possible to use ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot create Closure as attribute argument
	:og:description: It is possible to use ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-create-closure-as-attribute-argument.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot create Closure as attribute argument
	:twitter:description: Cannot create Closure as attribute argument: It is possible to use ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-as-attribute-argument.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-as-attribute-argument.html","name":"Cannot create Closure as attribute argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 15:19:38 +0000","dateModified":"Fri, 19 Jun 2026 15:19:38 +0000","description":"It is possible to use ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-create-closure-as-attribute-argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to use ``...`` in a function call, but not as an attribute, as it leads to create a PHP closure, which does not carry the Attribute attribute (sic). It also makes little sense, though the PHP parser accepts it, but not the linter.

Example
_______

.. code-block:: php

   <?php
   
   #[Foo(...)]
   function goo() {}
   
   ?>

Solutions
_________

+ Remove the three dots from the attribute.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
