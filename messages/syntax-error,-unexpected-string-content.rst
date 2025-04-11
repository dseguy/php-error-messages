.. _syntax-error,-unexpected-string-content:

syntax error, unexpected string content
---------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected string content: This error appears when a single quote string is not properly closed.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected string content
	:og:description: This error appears when a single quote string is not properly closed
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-string-content.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected string content
	:twitter:description: syntax error, unexpected string content: This error appears when a single quote string is not properly closed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-string-content.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-string-content.html","name":"syntax error, unexpected string content","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error appears when a single quote string is not properly closed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-string-content.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when a single quote string is not properly closed. In the example, there is an opening single quote, but not a closing one. PHP tries to use the rest of the code as a literal string, and ends up without tokens to wrap up the code legally.

Example
_______

.. code-block:: php

   <?php
   
   { $a = '1+2; }

Solutions
_________

+ Close the string with a single quote.
+ Close the string with a double quote.

Related Error Messages
______________________

+ :ref:`unclosed-'{'`
+ :ref:`unmatched-'}'`
+ :ref:`unmatched-')'`
+ :ref:`unmatched-']'`
