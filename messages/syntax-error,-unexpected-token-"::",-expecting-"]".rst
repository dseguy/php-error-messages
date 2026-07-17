.. _syntax-error,-unexpected-token-"::",-expecting-"]":

syntax error, unexpected token "::", expecting "]"
--------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "::", expecting "]": Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;::&quot;, expecting &quot;]&quot;
	:og:description: Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3A%3A%22%2C-expecting-%22%5D%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "::", expecting "]"
	:twitter:description: syntax error, unexpected token "::", expecting "]": Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\",-expecting-\"]\".html","name":"syntax error, unexpected token \"::\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 16:24:03 +0000","dateModified":"Wed, 15 Jul 2026 16:24:03 +0000","description":"Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"::\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``. The scope resolution operator ``::`` cannot start an expression on its own: it must be preceded by a class name, a variable or one of ``self``, ``parent`` or ``static``. Here, PHP found ``::`` immediately, so it reports that it was still expecting ``]`` to close the array access.

The same message also appears whenever a previous ``[`` was left unclosed, and a later, unrelated ``::`` is the first token that cannot continue the pending index expression.

Example
_______

.. code-block:: php

   <?php
   
       $arr = [1, 2, 3];
       $y = $arr[::];
   
   ?>

Solutions
_________

+ Provide the missing class name (or ``self``, ``parent``, ``static``) before ``::``, such as ``$arr[X::CONST]``.
+ Check that every previous ``[`` in the file has a matching ``]``.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"public",-expecting-"]"`
+ :ref:`syntax-error,-unexpected-token-"class",-expecting-"]"`
+ :ref:`syntax-error,-unexpected-token-"if",-expecting-"]"`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
