.. _too-few-arguments:

Too few arguments
-----------------
 
.. meta::
	:description:
		Too few arguments: Functions such as ``printf()`` require at least one argument, the format.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Too few arguments
	:og:description: Functions such as ``printf()`` require at least one argument, the format
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/too-few-arguments.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Too few arguments
	:twitter:description: Too few arguments: Functions such as ``printf()`` require at least one argument, the format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/too-few-arguments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/too-few-arguments.html","name":"Too few arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jan 2025 10:54:07 +0000","dateModified":"Mon, 27 Jan 2025 10:54:07 +0000","description":"Functions such as ``printf()`` require at least one argument, the format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/too-few-arguments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Functions such as ``printf()`` require at least one argument, the format. In that argument, the function will identify and require more arguments, passed after this first one. When there is not enough arguments for the first one, this error appears.

Not that extra arguments are ignored silently by PHP.

This applies to ``printf()``, ``sprintf()``, ``fprintf()``.


Example
_______

.. code-block:: php

   <?php
   
   printf('%s %s', 1);
   
   ?>


Literal Examples
****************
+ printf(): Too few arguments

Solutions
_________

+ Check that the format (first argument), has only the required placeholders ``%s``, ``%i``...
+ Check that the ``printf()`` has enough arguments to match the format.


In more recent PHP versions, this error message is now :ref:`%d-arguments-are-required,-%d`.
