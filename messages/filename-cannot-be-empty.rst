.. _filename-cannot-be-empty:

Filename cannot be empty
------------------------
 
.. meta::
	:description:
		Filename cannot be empty: fopen()&#039;s first argument is of type string, though the empty string is not allowed, as it does not lead to any file.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Filename cannot be empty
	:og:description: fopen()&#039;s first argument is of type string, though the empty string is not allowed, as it does not lead to any file
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/filename-cannot-be-empty.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Filename cannot be empty
	:twitter:description: Filename cannot be empty: fopen()'s first argument is of type string, though the empty string is not allowed, as it does not lead to any file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/filename-cannot-be-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/filename-cannot-be-empty.html","name":"Filename cannot be empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"fopen()'s first argument is of type string, though the empty string is not allowed, as it does not lead to any file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/filename-cannot-be-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
fopen()'s first argument is of type string, though the empty string is not allowed, as it does not lead to any file.

Example
_______

.. code-block:: php

   <?php
   
   fopen('', 'r');
   
   ?>

Solutions
_________

+ Check the name of the file with empty() before using it with fopen().
+ Check the name of the file against '' (empty string) before using it with fopen().
