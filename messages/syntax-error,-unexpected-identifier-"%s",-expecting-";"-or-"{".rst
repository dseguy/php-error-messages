.. _syntax-error,-unexpected-identifier-"%s",-expecting-";"-or-"{":

syntax error, unexpected identifier "%s", expecting ";" or "{"
--------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting ";" or "{": An abstract method&#039;s signature must be terminated with a semicolon, since it has no body, and a concrete method&#039;s signature must be followed by a ``{`` opening the body.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting &quot;;&quot; or &quot;{&quot;
	:og:description: An abstract method&#039;s signature must be terminated with a semicolon, since it has no body, and a concrete method&#039;s signature must be followed by a ``{`` opening the body
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-%22%3B%22-or-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting ";" or "{"
	:twitter:description: syntax error, unexpected identifier "%s", expecting ";" or "{": An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\";\"-or-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\";\"-or-\"{\".html","name":"syntax error, unexpected identifier \"%s\", expecting \";\" or \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 07:12:06 +0000","dateModified":"Wed, 15 Jul 2026 07:12:06 +0000","description":"An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\";\"-or-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body. Here, an extra identifier was found right after the closing parenthesis of the argument list, where PHP expected one of those two terminators.

This typically happens when a return type declaration is missing its leading colon, or when a stray word was left over after editing the signature.

Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
       abstract function foo() bar;
   }
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "bar", expecting ";" or "{"

Solutions
_________

+ If a return type was intended, add a colon before it: ``abstract function foo(): bar;``.
+ Remove the extra identifier.
+ If the method should have a body, replace the identifier with ``{`` and the method's code.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-identifier-"%s",-expecting-"("`
+ :ref:`syntax-error,-unexpected-variable-"$this",-expecting-";"-or-"{"`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
