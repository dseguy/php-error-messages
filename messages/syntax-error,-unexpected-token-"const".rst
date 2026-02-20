.. _syntax-error,-unexpected-token-"const":

syntax error, unexpected token "const"
--------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "const": There are several reasons why a ``const`` token is found misplaced.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;const&quot;
	:og:description: There are several reasons why a ``const`` token is found misplaced
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22const%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "const"
	:twitter:description: syntax error, unexpected token "const": There are several reasons why a ``const`` token is found misplaced
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"const\".html","name":"syntax error, unexpected token \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:15:18 +0000","dateModified":"Thu, 19 Feb 2026 22:15:18 +0000","description":"There are several reasons why a ``const`` token is found misplaced","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There are several reasons why a ``const`` token is found misplaced.

Attributes on global constants are supported since PHP 8.5. Before that version, they are not recognized, and yield this syntax error.

The error also appears when the ``const`` keyword is used in the body of the code, outside the main code: this means in any control flow block, such as ``ifthen``, ``switch``, etc. and in any structure like ``function``, ``method``, etc. It is still OK to use ``const`` in the body of a ``class``, ``interface``, ``trait`` or ``enum``. In such cases, one must use ``define()`` to define a constant.

Example
_______

.. code-block:: php

   <?php
   
   #[ConstAttribute]
   const A = 1;
   
   if ($condition) {
       // global constant must be in the global space, and cannot be conditional
       const X = 2;
   }
   
   class X {
       function foo() {
           // global constant must be in the global space, and cannot be conditional
           const Y = 2;
       }
   }
   
   ?>

Solutions
_________

+ Remove the attribute.
+ Refactor the global constant to a class constant.
+ Use define() instead of const.
+ Use the ternary operator ``?  :`` inside the constant definition.
+ Use inclusion.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
