.. _syntax-error,-unexpected-token-"}",-expecting-";"-or-"{":

syntax error, unexpected token "}", expecting ";" or "{"
--------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "}", expecting ";" or "{": PHP found a closing curly bracket, but did not encounter its opening equivalent.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;}&quot;, expecting &quot;;&quot; or &quot;{&quot;
	:og:description: PHP found a closing curly bracket, but did not encounter its opening equivalent
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%7D%22%2C-expecting-%22%3B%22-or-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "}", expecting ";" or "{"
	:twitter:description: syntax error, unexpected token "}", expecting ";" or "{": PHP found a closing curly bracket, but did not encounter its opening equivalent
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"}\",-expecting-\";\"-or-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"}\",-expecting-\";\"-or-\"{\".html","name":"syntax error, unexpected token \"}\", expecting \";\" or \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Apr 2025 17:42:49 +0000","dateModified":"Fri, 11 Apr 2025 17:42:49 +0000","description":"PHP found a closing curly bracket, but did not encounter its opening equivalent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"}\",-expecting-\";\"-or-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP found a closing curly bracket, but did not encounter its opening equivalent. Since the problem appears in the signature of a method, there are two suggestions: make the method abstract, with a semi-colon ';', or give the method a full body, with the opening curly bracket.

Example
_______

.. code-block:: php

   <?php
   
   class A
   {
       public function __construct() 
       }
   }
   ?>

Solutions
_________

+ Add an opening curly bracket '{' before the closing one. Possibly, fill the body of the method.
+ Replace the closing curly bracket with a semi colon. The method, and possibly the class, must now be abstract.
