.. _cannot-use-\$this-as-parameter:

Cannot use $this as parameter
-----------------------------
 
.. meta::
	:description:
		Cannot use $this as parameter: Cannot use $this as parameter.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use $this as parameter
	:og:description: Cannot use $this as parameter
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%24this-as-parameter.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use $this as parameter
	:twitter:description: Cannot use $this as parameter: Cannot use $this as parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-parameter.html","name":"Cannot use $this as parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:11:58 +0000","dateModified":"Mon, 13 Jul 2026 08:11:58 +0000","description":"Cannot use $this as parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-$this-as-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Cannot use $this as parameter. Using $this as a method parameter is not allowed in PHP.

Example
_______

.. code-block:: php

   <?php
   
       function foo($this) { }
   
   ?>

Solutions
_________

+ Pass the object as a parameter by creating a method that accepts an object parameter instead.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
