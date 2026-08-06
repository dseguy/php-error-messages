.. _unparenthesized-`a-?-b-:-c-?:-d`-is-not-supported.:

Unparenthesized `a ? b : c ?: d` is not supported.
--------------------------------------------------
 
.. meta::
	:description:
		Unparenthesized `a ? b : c ?: d` is not supported.: Mixing a full ternary with the short ternary operator (``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unparenthesized `a ? b : c ?: d` is not supported.
	:og:description: Mixing a full ternary with the short ternary operator (``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unparenthesized-%60a-%3F-b-%3A-c-%3F%3A-d%60-is-not-supported..html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unparenthesized `a ? b : c ?: d` is not supported.
	:twitter:description: Unparenthesized `a ? b : c ?: d` is not supported.: Mixing a full ternary with the short ternary operator (``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unparenthesized-`a-?-b-:-c-?:-d`-is-not-supported..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unparenthesized-`a-?-b-:-c-?:-d`-is-not-supported..html","name":"Unparenthesized `a ? b : c ?: d` is not supported.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 08:58:39 +0000","dateModified":"Thu, 06 Aug 2026 08:58:39 +0000","description":"Mixing a full ternary with the short ternary operator (``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unparenthesized-`a-?-b-:-c-?:-d`-is-not-supported..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Mixing a full ternary with the short ternary operator (``?:``) requires a clear definition of priorities, by using parenthesis.

The code above could be understood as `($a ? $b : $c) ?: $d` or `$a ? $b : ($c ?: $d)`. Until PHP 8.0, the engine chose the first option, since the ternary operator was left-associative; since then, it must be explicitly written.

Note that, in the error message, the letters represent a full expression. They may be variables, as in the illustration, but any other expression.

Example
_______

.. code-block:: php

   <?php
   
   $x = $a ? $b : $c ?: $d;
   
   ?>

Solutions
_________

+ Write the expression as `($a ? $b : $c) ?: $d`.
+ Write the expression as `$a ? $b : ($c ?: $d)`.
+ Rewrite the expression as an if/then.

Related Error Messages
______________________

+ :ref:`unparenthesized-`a-?-b-:-c-?-d-:-e`-is-not-supported.`
+ :ref:`unparenthesized-`a-?:-b-?-c-:-d`-is-not-supported.`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
