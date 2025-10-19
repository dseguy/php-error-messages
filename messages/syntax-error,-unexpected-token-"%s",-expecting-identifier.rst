.. _syntax-error,-unexpected-token-"%s",-expecting-identifier:

syntax error, unexpected token "%s", expecting identifier
---------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "%s", expecting identifier: This error arises when a PHP token is used where a name is expected.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;%s&quot;, expecting identifier
	:og:description: This error arises when a PHP token is used where a name is expected
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%25s%22%2C-expecting-identifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "%s", expecting identifier
	:twitter:description: syntax error, unexpected token "%s", expecting identifier: This error arises when a PHP token is used where a name is expected
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"%s\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"%s\",-expecting-identifier.html","name":"syntax error, unexpected token \"%s\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Oct 2025 09:06:10 +0000","dateModified":"Sun, 19 Oct 2025 09:06:10 +0000","description":"This error arises when a PHP token is used where a name is expected","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"%s\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error arises when a PHP token is used where a name is expected. There is a conflict between the PHP token, which has its own meaning, and the expected name, which is a 'T_STRING' token.

This happens with any named structure, such as CITE, functions and global constants. It is legit with class constants and methods. 

The identifier can be any string, that satisfy the regex ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``, and is not a PHP keyword.

This error is case insensitive, like PHP keywords.

Example
_______

.. code-block:: php

   <?php
   
   class Match {} 
   trait Switch {} 
   
   class echo {} 
   interface ECHO {} 
   enum echo {} 
   trait echo {} 
   function echo() {} 
   const echo = 1;
   
   ?>

Solutions
_________

+ Add a distinguishing prefix or suffix to the name to stay out of conflict with PHP keywords.
+ Check if the PHP version introduces new keywords.
+ Make the function a method.
+ Make the constant a global constant.
+ Prefix or suffix the name, to make it a normal word, not a keyword.
