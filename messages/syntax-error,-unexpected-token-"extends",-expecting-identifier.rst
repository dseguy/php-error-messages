.. _syntax-error,-unexpected-token-"extends",-expecting-identifier:

syntax error, unexpected token "extends", expecting identifier
--------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "extends", expecting identifier: The ``extends`` keyword may only be used after a class name, an interface name, or the parenthesis of an anonymous class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;extends&quot;, expecting identifier
	:og:description: The ``extends`` keyword may only be used after a class name, an interface name, or the parenthesis of an anonymous class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22extends%22%2C-expecting-identifier.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "extends", expecting identifier
	:twitter:description: syntax error, unexpected token "extends", expecting identifier: The ``extends`` keyword may only be used after a class name, an interface name, or the parenthesis of an anonymous class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\",-expecting-identifier.html","name":"syntax error, unexpected token \"extends\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Mar 2025 21:31:29 +0000","dateModified":"Tue, 25 Mar 2025 21:31:29 +0000","description":"The ``extends`` keyword may only be used after a class name, an interface name, or the parenthesis of an anonymous class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"extends\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``extends`` keyword may only be used after a class name, an interface name, or the parenthesis of an anonymous class.

Example
_______

.. code-block:: php

   <?php
   
   // this is missing the name of the class 
   class  extends B {}
   
   // this is missing the name of the interface
   interface extends B {}
   
   ?>

Solutions
_________

+ Add a name to the class.
+ Add a name to the interface.
+ Add set of parenthesis to the class to make it anonymous.
