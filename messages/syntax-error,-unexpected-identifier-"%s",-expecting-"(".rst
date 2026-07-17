.. _syntax-error,-unexpected-identifier-"%s",-expecting-"(":

syntax error, unexpected identifier "%s", expecting "("
-------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting "(": After the ``function`` keyword and the function&#039;s name, PHP expects the opening parenthesis of the argument list.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;(&quot;
	:og:description: After the ``function`` keyword and the function&#039;s name, PHP expects the opening parenthesis of the argument list
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22%28%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting "("
	:twitter:description: syntax error, unexpected identifier "%s", expecting "(": After the ``function`` keyword and the function's name, PHP expects the opening parenthesis of the argument list
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"(\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 07:12:01 +0000","dateModified":"Wed, 15 Jul 2026 07:12:01 +0000","description":"After the ``function`` keyword and the function's name, PHP expects the opening parenthesis of the argument list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
After the ``function`` keyword and the function's name, PHP expects the opening parenthesis of the argument list. Here, a second identifier was found instead, which usually means an extra word was typed, or a comma or a return-type colon was forgotten between two declarations.

Example
_______

.. code-block:: php

   <?php
   
   function foo bar() {}
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "bar", expecting "("

Solutions
_________

+ Remove the extra identifier, keeping only the function name.
+ If a return type was intended, add a colon before it: ``function foo(): bar {}``.
+ If two functions were meant to be declared, close the first one and start a new ``function`` statement.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-identifier-"%s",-expecting-";"-or-"{"`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
