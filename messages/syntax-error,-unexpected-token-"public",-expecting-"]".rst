.. _syntax-error,-unexpected-token-"public",-expecting-"]":

syntax error, unexpected token "public", expecting "]"
------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "public", expecting "]": Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;public&quot;, expecting &quot;]&quot;
	:og:description: Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22public%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "public", expecting "]"
	:twitter:description: syntax error, unexpected token "public", expecting "]": Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\",-expecting-\"]\".html","name":"syntax error, unexpected token \"public\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 16:24:45 +0000","dateModified":"Wed, 15 Jul 2026 16:24:45 +0000","description":"Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"public\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``. ``public`` is a reserved word: it can only be used as a visibility modifier, never as the start of an expression, such as an unquoted array key. PHP therefore reports that it was still expecting ``]`` to close the array access.

The same message also appears whenever a previous ``[`` was left unclosed, and a later, unrelated ``public`` is the first token that cannot continue the pending index expression.

Example
_______

.. code-block:: php

   <?php
   
   $arr = [1, 2, 3];
   $y = $arr[public];
   
   ?>

Solutions
_________

+ Quote the key if a string was intended: ``$arr['public']``.
+ Use a constant or variable holding the intended key instead of the bare word.
+ Check that every previous ``[`` in the file has a matching ``]``.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"::",-expecting-"]"`
+ :ref:`syntax-error,-unexpected-token-"class",-expecting-"]"`
+ :ref:`syntax-error,-unexpected-token-"if",-expecting-"]"`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
