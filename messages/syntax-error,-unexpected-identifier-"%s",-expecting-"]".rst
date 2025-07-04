.. _syntax-error,-unexpected-identifier-"%s",-expecting-"]":

syntax error, unexpected identifier "%s", expecting "]"
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting "]": PHP has found two identifiers, one next to the other.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;]&quot;
	:og:description: PHP has found two identifiers, one next to the other
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting "]"
	:twitter:description: syntax error, unexpected identifier "%s", expecting "]": PHP has found two identifiers, one next to the other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"]\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 12:50:04 +0000","dateModified":"Fri, 04 Jul 2025 12:50:04 +0000","description":"PHP has found two identifiers, one next to the other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP has found two identifiers, one next to the other. This might happen inside an attribute declaration or a function call, where a separator has been forgotten.

Example
_______

.. code-block:: php

   <?php
   
   #[A name:a)]  // forgotten opening parenthesis
   class X {}
   
   ?>

Solutions
_________

+ Close the attribute with a closing square bracket. The following code needs to be updated too.
+ Open the argument part of the attribute, with an opening parenthese.
