.. _calling-get_parent_class()-without-arguments-is-deprecated:

Calling get_parent_class() without arguments is deprecated
----------------------------------------------------------
 
.. meta::
	:description:
		Calling get_parent_class() without arguments is deprecated: Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
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
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-get_parent_class()-without-arguments-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/calling-get_parent_class()-without-arguments-is-deprecated.html","name":"Calling get_parent_class() without arguments is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 12 Nov 2024 20:00:07 +0000","dateModified":"Tue, 12 Nov 2024 20:00:07 +0000","description":"Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/calling-get_parent_class()-without-arguments-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.3. Using the null value defaulted to the current class, so it is possible to use ``$this`` instead.

Example
_______

.. code-block:: php

   <?php
   
   get_class();
   
   ?>

Solutions
_________

+ Use ``$this`` instead of no argument.
