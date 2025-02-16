.. _syntax-error,-unexpected-fully-qualified-name-"%s",-expecting-"{":

syntax error, unexpected fully qualified name "%s", expecting "{"
-----------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected fully qualified name "%s", expecting "{": Until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected fully qualified name &quot;%s&quot;, expecting &quot;{&quot;
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%25s%22%2C-expecting-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected fully qualified name "%s", expecting "{"
	:twitter:description: syntax error, unexpected fully qualified name "%s", expecting "{": Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"{\".html","name":"syntax error, unexpected fully qualified name \"%s\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:56:45 +0000","dateModified":"Sun, 16 Feb 2025 12:56:45 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.0, it was possible to include spaces or new lines in a namespace. They would be ignored later, but parsed and handled that way. 

In PHP 8.0, this is not possible anymore.

Example
_______

.. code-block:: php

   <?php
   
   namespace Vendor
   \XXX;
   
   echo 1;
   
   ?>


Literal Examples
****************
+ syntax error, unexpected fully qualified name "\XXX", expecting "{"

Solutions
_________

+ Make namespaces one string, without new lines or any spaces.
