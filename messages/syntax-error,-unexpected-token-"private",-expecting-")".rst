.. _syntax-error,-unexpected-token-"private",-expecting-")":

syntax error, unexpected token "private", expecting ")"
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "private", expecting ")": ``private`` is not expected at this position in the code, as the previous property ``$a`` is not finished.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;private&quot;, expecting &quot;)&quot;
	:og:description: ``private`` is not expected at this position in the code, as the previous property ``$a`` is not finished
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22private%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "private", expecting ")"
	:twitter:description: syntax error, unexpected token "private", expecting ")": ``private`` is not expected at this position in the code, as the previous property ``$a`` is not finished
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\")\".html","name":"syntax error, unexpected token \"private\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Mar 2025 21:41:25 +0000","dateModified":"Tue, 25 Mar 2025 21:41:25 +0000","description":"``private`` is not expected at this position in the code, as the previous property ``$a`` is not finished","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"private\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``private`` is not expected at this position in the code, as the previous property ``$a`` is not finished. It would be finished with a closing parenthesis ``)``, as suggested by the error message,  or a ``comma``, to introduce the next property.

This error message might have other variations, such as ``protected``, ``public``, ``static``, ``readonly``, ``abstract``, ``final``.

Example
_______

.. code-block:: php

   <?php
   
   class ProcessController extends AbstractController
   {
       public function __construct(
           public A $a
           private B $b,
       ) {
       }
   }
   ?>

Solutions
_________

+ Add a comma to introduce the next property or argument.
+ Add a closing parenthesis to close the signature and the previous property.
