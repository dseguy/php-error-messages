.. _syntax-error,-unexpected-token-"--",-expecting-"{":

syntax error, unexpected token "\\", expecting "{"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "\\", expecting "{": This syntax error is related to the usage of PHP keyword in a namespace.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;\\&quot;, expecting &quot;{&quot;
	:og:description: This syntax error is related to the usage of PHP keyword in a namespace
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22--%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "\\", expecting "{"
	:twitter:description: syntax error, unexpected token "\\", expecting "{": This syntax error is related to the usage of PHP keyword in a namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"--\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"--\",-expecting-\"{\".html","name":"syntax error, unexpected token \"\\\\\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 27 Sep 2025 07:34:24 +0000","dateModified":"Sat, 27 Sep 2025 07:34:24 +0000","description":"This syntax error is related to the usage of PHP keyword in a namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"--\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This syntax error is related to the usage of PHP keyword in a namespace. Until PHP 8.0, the namespace could not use any such keyword, and produced a compilation error.

Example
_______

.. code-block:: php

   <?php
   
   namespace A\eval\B;
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.0 or more recent.
+ Rename the namespace to avoid using PHP keywords.
