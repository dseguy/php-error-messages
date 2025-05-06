.. _calling-get_parent_class()-without-arguments-is-deprecated:

Calling get_parent_class() without arguments is deprecated
----------------------------------------------------------
 
.. meta::
	:description:
		Calling get_parent_class() without arguments is deprecated: Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Calling get_parent_class() without arguments is deprecated
	:og:description: Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/calling-get_parent_class%28%29-without-arguments-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Calling get_parent_class() without arguments is deprecated
	:twitter:description: Calling get_parent_class() without arguments is deprecated: Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-get_parent_class()-without-arguments-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-get_parent_class()-without-arguments-is-deprecated.html","name":"Calling get_parent_class() without arguments is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Apr 2025 07:50:18 +0000","dateModified":"Mon, 21 Apr 2025 07:50:18 +0000","description":"Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/calling-get_parent_class()-without-arguments-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.3. Using the null value defaulted to the current class, so it is possible to use ``$this`` instead.

Example
_______

.. code-block:: php

   <?php
   
   get_parent_class();
   
   ?>

Solutions
_________

+ Use ``$this`` as an argument.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `get_classWithoutArgument <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_classWithoutArgument.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `get_classWithoutArgument <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/get_classWithoutArgument.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Structures/GetClassWithoutArg <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/GetClassWithoutArg.html>`_.
