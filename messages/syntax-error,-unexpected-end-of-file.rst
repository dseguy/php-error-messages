.. _syntax-error,-unexpected-end-of-file:

syntax error, unexpected end of file
------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected end of file: The ``unexpected end of file`` happens when PHP has not finished parsing a file, and still expected a few more tokens to complete it.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected end of file
	:og:description: The ``unexpected end of file`` happens when PHP has not finished parsing a file, and still expected a few more tokens to complete it
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-end-of-file.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected end of file
	:twitter:description: syntax error, unexpected end of file: The ``unexpected end of file`` happens when PHP has not finished parsing a file, and still expected a few more tokens to complete it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-end-of-file.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-end-of-file.html","name":"syntax error, unexpected end of file","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The ``unexpected end of file`` happens when PHP has not finished parsing a file, and still expected a few more tokens to complete it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-end-of-file.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``unexpected end of file`` happens when PHP has not finished parsing a file, and still expected a few more tokens to complete it. 

Usually, this means that not enough code was provided, or also, that some code instruction were not completed as expected. 

In the example here, the expression is completed with a semi-colon, or a closing PHP tag. Both would conclude the expression, and the script, but they are not available.

Example
_______

.. code-block:: php

   <?php
   
   $x = 1

Solutions
_________

+ Make sure all expression are completed.
