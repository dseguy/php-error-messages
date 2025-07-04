.. _must-not-contain-empty-strings:

must not contain empty strings
------------------------------
 
.. meta::
	:description:
		must not contain empty strings: The deflate_init() function accepts options.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must not contain empty strings
	:og:description: The deflate_init() function accepts options
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-not-contain-empty-strings.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must not contain empty strings
	:twitter:description: must not contain empty strings: The deflate_init() function accepts options
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-not-contain-empty-strings.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-not-contain-empty-strings.html","name":"must not contain empty strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 13:36:06 +0000","dateModified":"Fri, 04 Jul 2025 13:36:06 +0000","description":"The deflate_init() function accepts options","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-not-contain-empty-strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The deflate_init() function accepts options. Among the options, there is a dictionary, with a dictionary of preset strings. Theses strings cannot be left empty.

Before PHP 8.2, this bug would crash PHP.


Example
_______

.. code-block:: php

   <?php
   try {
       deflate_init(ZLIB_ENCODING_DEFLATE, [dictionary => [, ]]);
   } catch (ValueError $ex) {
       echo $ex->getMessage(), \n;
   }
   ?>
   

Solutions
_________

+ Remove the 2nd argument.
+ Remove the 'dictionary' entry in the 2nd argument.
+ Put an actual value in the values of the 'dictionary' entry in the 2nd argument.
