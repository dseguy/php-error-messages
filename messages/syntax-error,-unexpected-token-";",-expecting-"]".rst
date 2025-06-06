.. _syntax-error,-unexpected-token-";",-expecting-"]":

syntax error, unexpected token ";", expecting "]"
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting "]": A semi-colon was found after an opening square bracket.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;]&quot;
	:og:description: A semi-colon was found after an opening square bracket
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting "]"
	:twitter:description: syntax error, unexpected token ";", expecting "]": A semi-colon was found after an opening square bracket
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"]\".html","name":"syntax error, unexpected token \";\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A semi-colon was found after an opening square bracket","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A semi-colon was found after an opening square bracket. To keep the code balanced, PHP expects the bracket to be closed before finishing the instruction.

Example
_______

.. code-block:: php

   <?php
   
   [1,2; ];
   
   $a[4;];
   
   ?>

Solutions
_________

+ Remove the semi-colon.
+ Close the square bracket before the semi-colon.
