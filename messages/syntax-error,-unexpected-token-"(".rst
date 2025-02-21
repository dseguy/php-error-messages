.. _syntax-error,-unexpected-token-"(":

syntax error, unexpected token "("
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "(": Parenthesis cannot be placed anywhere, although they have a wide range of applications.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;(&quot;
	:og:description: Parenthesis cannot be placed anywhere, although they have a wide range of applications
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "("
	:twitter:description: syntax error, unexpected token "(": Parenthesis cannot be placed anywhere, although they have a wide range of applications
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\".html","name":"syntax error, unexpected token \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Parenthesis cannot be placed anywhere, although they have a wide range of applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Parenthesis cannot be placed anywhere, although they have a wide range of applications. In particular, they are used to call methods, by delimiting arguments; and set part of expressions apart.

A class cannot hold a closure, only method, which are functions with a name.

The syntax to call a method on an instantiation ``new x()->foo()`` and ``new x()()`` has been introduced in PHP 8.4.

Example
_______

.. code-block:: php

   <?php
   
   // methods cannot be closure: they need a name
   class X {
       function () {}
   }
   
   // This is a PHP 8.4 syntax, cannot be used before.
   new $x()(); 
   // equivalent to (new $x())->__invoke();
   
   ?>

Solutions
_________

+ Add the name to the method.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"}"`
+ :ref:`syntax-error,-unexpected-token-")"`
+ :ref:`syntax-error,-unexpected-token-"]"`
