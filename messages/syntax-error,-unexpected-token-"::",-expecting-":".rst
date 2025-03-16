.. _syntax-error,-unexpected-token-"::",-expecting-":":

syntax error, unexpected token "::", expecting ":"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "::", expecting ":": In this example, ``Match`` is a PHP keyword, and cannot be part of a static call, with the operator ``::``.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;::&quot;, expecting &quot;:&quot;
	:og:description: In this example, ``Match`` is a PHP keyword, and cannot be part of a static call, with the operator ``::``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%3A%22%2C-expecting-%22%3A%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "::", expecting ":"
	:twitter:description: syntax error, unexpected token "::", expecting ":": In this example, ``Match`` is a PHP keyword, and cannot be part of a static call, with the operator ``::``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\",-expecting-\":\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\",-expecting-\":\".html","name":"syntax error, unexpected token \"::\", expecting \":\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Mar 2025 09:35:19 +0000","dateModified":"Sun, 16 Mar 2025 09:35:19 +0000","description":"In this example, ``Match`` is a PHP keyword, and cannot be part of a static call, with the operator ``::``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\",-expecting-\":\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In this example, ``Match`` is a PHP keyword, and cannot be part of a static call, with the operator ``::``. On the other hand, ``Match`` could be a parameter name, where the ``foo`` function, has a ``$Match`` parameter. Hence, the suggestion to use ``:`` a single colon.

This error may also appear with other keywords, such as ``Switch``. It is also case-insensitive.

Example
_______

.. code-block:: php

   <?php
   
   foo(Match::a());
   
   ?>

Solutions
_________

+ Use a single colon, if ``$Match`` is actually a parameter name.
+ Rename the ``Match`` class to avoid conflicts with PHP keywords.
