.. _error-at-offset-%zd-of-%zd:

Error at offset %zd of %zd
--------------------------
 
.. meta::
	:description:
		Error at offset %zd of %zd: Unserialize() reads a string, and parse it to produce a value: integer, string, array, object.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Error at offset %zd of %zd
	:og:description: Unserialize() reads a string, and parse it to produce a value: integer, string, array, object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/error-at-offset-%25zd-of-%25zd.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Error at offset %zd of %zd
	:twitter:description: Error at offset %zd of %zd: Unserialize() reads a string, and parse it to produce a value: integer, string, array, object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/error-at-offset-%zd-of-%zd.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/error-at-offset-%zd-of-%zd.html","name":"Error at offset %zd of %zd","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jan 2025 09:18:40 +0000","dateModified":"Mon, 20 Jan 2025 09:18:40 +0000","description":"Unserialize() reads a string, and parse it to produce a value: integer, string, array, object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/error-at-offset-%zd-of-%zd.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Unserialize() reads a string, and parse it to produce a value: integer, string, array, object... It uses a specific format, and when there isn't enough information to successfully run the parse, this error message is emitted.

Example
_______

.. code-block:: php

   <?php
   
   unserialize("an invalid string");
   
   ?>

Solutions
_________

+ Catch the returned value of the function: when it is null, an error occurred.

See Also
________

+ `PHP serialize <https://www.phptutorial.net/php-oop/php-serialize/>`_
