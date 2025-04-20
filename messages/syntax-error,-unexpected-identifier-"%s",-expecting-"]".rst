.. _syntax-error,-unexpected-identifier-"%s",-expecting-"]":

syntax error, unexpected identifier "%s", expecting "]"
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting "]": PHP found two identifiers next to each other.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;]&quot;
	:og:description: PHP found two identifiers next to each other
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting "]"
	:twitter:description: syntax error, unexpected identifier "%s", expecting "]": PHP found two identifiers next to each other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"]\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:03:52 +0000","dateModified":"Sun, 20 Apr 2025 08:03:52 +0000","description":"PHP found two identifiers next to each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP found two identifiers next to each other. This happened inside an attribute declaration.

Example
_______

.. code-block:: php

   <?php
   
   #[A name:a)]
   class X {}
   
   ?>

Solutions
_________

+ Close the attribute with a closing square bracket. The following code needs to be updated too.
+ Open the argument part of the attribute, with an opening parenthese.
