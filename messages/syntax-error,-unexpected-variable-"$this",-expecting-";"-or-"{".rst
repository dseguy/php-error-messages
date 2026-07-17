.. _syntax-error,-unexpected-variable-"\$this",-expecting-";"-or-"{":

syntax error, unexpected variable "$this", expecting ";" or "{"
---------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected variable "$this", expecting ";" or "{": An abstract method&#039;s signature must be terminated with a semicolon, since it has no body, and a concrete method&#039;s signature must be followed by a ``{`` opening the body.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected variable &quot;$this&quot;, expecting &quot;;&quot; or &quot;{&quot;
	:og:description: An abstract method&#039;s signature must be terminated with a semicolon, since it has no body, and a concrete method&#039;s signature must be followed by a ``{`` opening the body
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-variable-%22%24this%22%2C-expecting-%22%3B%22-or-%22%7B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected variable "$this", expecting ";" or "{"
	:twitter:description: syntax error, unexpected variable "$this", expecting ";" or "{": An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"$this\",-expecting-\";\"-or-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"$this\",-expecting-\";\"-or-\"{\".html","name":"syntax error, unexpected variable \"$this\", expecting \";\" or \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 16:24:54 +0000","dateModified":"Wed, 15 Jul 2026 16:24:54 +0000","description":"An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-variable-\"$this\",-expecting-\";\"-or-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body. Here, the variable ``$this`` was found right after the closing parenthesis of the argument list, where PHP expected one of those two terminators.

``$this`` cannot appear here in any case: it is a read-only pseudo-variable, automatically bound to the current object inside a non-static method, and it can never be declared, assigned or used as a standalone statement outside of an expression.

Example
_______

.. code-block:: php

   <?php
   
   abstract class X {
       abstract function foo() $this;
   }
   
   ?>

Solutions
_________

+ Remove ``$this`` and terminate the abstract method with a semicolon.
+ If a method body was intended, replace ``$this`` with ``{`` and the method's code.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-identifier-"%s",-expecting-";"-or-"{"`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
