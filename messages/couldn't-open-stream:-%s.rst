.. _couldn't-open-stream:-%s:

Couldn't open stream: %s
------------------------
 
.. meta::
	:description:
		Couldn't open stream: %s: When opening a stream, or file, a mode of operation is needed.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Couldn&#039;t open stream: %s
	:og:description: When opening a stream, or file, a mode of operation is needed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/couldn%27t-open-stream%3A-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Couldn't open stream: %s
	:twitter:description: Couldn't open stream: %s: When opening a stream, or file, a mode of operation is needed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/couldn't-open-stream:-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/couldn't-open-stream:-%s.html","name":"Couldn't open stream: %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"When opening a stream, or file, a mode of operation is needed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/couldn't-open-stream:-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When opening a stream, or file, a mode of operation is needed. 

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.

All other strings are not supported, and yield this error.

Example
_______

.. code-block:: php

   <?php
   
   //`+k' is not a valid mode for fopen 
   // k is not an open option
   fopen($path, '+k');
   
   //`wr' is not a valid mode for fopen 
   // write-only w and read-only r are mutually exclusive
   fopen($path, 'wr');
   
   
   ?>


Literal Examples
****************
+ Couldn't open stream: '+k' is not a valid mode for fopen
+ Couldn't open stream: Is a directory
+ Couldn't open stream: Inappropriate ioctl for device
+ Couldn't open stream: Invalid argument

Solutions
_________

+ Use only valid stream open modes.

See Also
________

+ `fopen <https://www.php.net/manual/en/function.fopen.php>`_


In previous PHP versions, this error message used to be :ref:`couldn't-open-stream-%s`.
