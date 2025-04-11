.. _error-at-offset-%zd-of-%zd:

Error at offset %zd of %zd
--------------------------
 
.. meta::
	:description:
		Error at offset %zd of %zd: Unserialize() reads a string, and parse it to produce a value: integer, string, array, object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
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
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/error-at-offset-%zd-of-%zd.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/error-at-offset-%zd-of-%zd.html","name":"Error at offset %zd of %zd","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Unserialize() reads a string, and parse it to produce a value: integer, string, array, object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/error-at-offset-%zd-of-%zd.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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

+ `PHPserialize <https://www.phptutorial.net/php-oop/php-serialize/>`_
