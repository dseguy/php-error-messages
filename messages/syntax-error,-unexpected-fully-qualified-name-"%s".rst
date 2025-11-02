.. _syntax-error,-unexpected-fully-qualified-name-"%s":

syntax error, unexpected fully qualified name "%s"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected fully qualified name "%s": This error appears when new lines are introduced inside a namespace.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected fully qualified name &quot;%s&quot;
	:og:description: This error appears when new lines are introduced inside a namespace
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-fully-qualified-name-%22%25s%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected fully qualified name "%s"
	:twitter:description: syntax error, unexpected fully qualified name "%s": This error appears when new lines are introduced inside a namespace
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\".html","name":"syntax error, unexpected fully qualified name \"%s\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Nov 2025 20:14:43 +0000","dateModified":"Sun, 02 Nov 2025 20:14:43 +0000","description":"This error appears when new lines are introduced inside a namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-fully-qualified-name-\"%s\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when new lines are introduced inside a namespace. This was possible syntax until PHP 8.0, but not anymore.

Example
_______

.. code-block:: php

   <?php
   
   // constant
       \A 
                              \B 
                              \C
                              ;
                              
   ?>

Solutions
_________

+ Remove the new lines and whitespaces from the namespace.
