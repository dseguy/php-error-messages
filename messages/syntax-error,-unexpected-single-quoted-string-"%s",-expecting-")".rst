.. _syntax-error,-unexpected-single-quoted-string-"%s",-expecting-")":

syntax error, unexpected single quoted string "%s", expecting ")"
-----------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected single quoted string "%s", expecting ")": After an identifier, such as ``name``, there can only be a delimiter, such as ``(``, ``[``, or ``:`` but not a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected single quoted string &quot;%s&quot;, expecting &quot;)&quot;
	:og:description: After an identifier, such as ``name``, there can only be a delimiter, such as ``(``, ``[``, or ``:`` but not a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-single-quoted-string-%22%25s%22%2C-expecting-%22%29%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected single quoted string "%s", expecting ")"
	:twitter:description: syntax error, unexpected single quoted string "%s", expecting ")": After an identifier, such as ``name``, there can only be a delimiter, such as ``(``, ``[``, or ``:`` but not a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-single-quoted-string-\"%s\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-single-quoted-string-\"%s\",-expecting-\")\".html","name":"syntax error, unexpected single quoted string \"%s\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"After an identifier, such as ``name``, there can only be a delimiter, such as ``(``, ``[``, or ``:`` but not a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-single-quoted-string-\"%s\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
After an identifier, such as ``name``, there can only be a delimiter, such as ``(``, ``[``, or ``:`` but not a string.

Example
_______

.. code-block:: php

   <?php
   
   foo(name 'A');
   
   ?>


Literal Examples
****************
+ syntax-error,-unexpected-single-quoted-string-"A",-expecting-")"

Solutions
_________

+ Add a colon between ``name`` and ``'A'``, to make a named parameter.
+ Add parenthesis  after ``name`` and around ``'A'``, to make a function call.
+ Add square brackets  after ``name`` and around ``'A'``, to make a array call.
