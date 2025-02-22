.. _syntax-error,-unexpected-identifier-"%s",-expecting-"function":

syntax error, unexpected identifier "%s", expecting "function"
--------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting "function": PHP identified a name in the body of a class, although it was not preceded by a keyword.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;function&quot;
	:og:description: PHP identified a name in the body of a class, although it was not preceded by a keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22function%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting "function"
	:twitter:description: syntax error, unexpected identifier "%s", expecting "function": PHP identified a name in the body of a class, although it was not preceded by a keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"function\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Feb 2025 13:59:58 +0000","dateModified":"Sat, 22 Feb 2025 13:59:58 +0000","description":"PHP identified a name in the body of a class, although it was not preceded by a keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP identified a name in the body of a class, although it was not preceded by a keyword.

The error may suggest ``function``, but any definition keyword will do: ``private``, ``protected``, ``public``, ``var``, ``const``, ``function``, ``use``.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       publicfunction foo() {}
   }
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "publicfunction", expecting "function"

Solutions
_________

+ Add a definition keyword before the name.
+ Fix the syntax and make a keyword appear at the beginning of the definition.


In previous PHP versions, this error message used to be :ref:`syntax-error,-unexpected-identifier-"%s",-expecting-"function"-or-"const"`.
