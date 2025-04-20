.. _syntax-error,-unexpected-token-",",-expecting-"]":

syntax error, unexpected token ",", expecting "]"
-------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ",", expecting "]": A comma was found in an array syntax: the syntax is ``$variable[$index]``, and there can be only one index between the brackets.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;,&quot;, expecting &quot;]&quot;
	:og:description: A comma was found in an array syntax: the syntax is ``$variable[$index]``, and there can be only one index between the brackets
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%2C%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ",", expecting "]"
	:twitter:description: syntax error, unexpected token ",", expecting "]": A comma was found in an array syntax: the syntax is ``$variable[$index]``, and there can be only one index between the brackets
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-\"]\".html","name":"syntax error, unexpected token \",\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 20 Apr 2025 08:27:40 +0000","dateModified":"Sun, 20 Apr 2025 08:27:40 +0000","description":"A comma was found in an array syntax: the syntax is ``$variable[$index]``, and there can be only one index between the brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\",\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A comma was found in an array syntax: the syntax is ``$variable[$index]``, and there can be only one index between the brackets.

Example
_______

.. code-block:: php

   <?php
   
   echo $a[1,2];
   
   ?>

Solutions
_________

+ Remove the comma and the code after it, until the closing bracket.
+ Close the square bracket, open a new one and remove the comma: ``$a[1][2]``.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-","`
+ :ref:`syntax-error,-unexpected-token-",",-expecting-variable-or-"$"`
+ :ref:`syntax-error,-unexpected-token-",",-expecting-variable`
