.. _syntax-error,-unexpected-identifier-"readonly",-expecting-"function"-or-"const":

syntax error, unexpected identifier "readonly", expecting "function" or "const"
-------------------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "readonly", expecting "function" or "const": This syntax error signals that ``readonly`` is still considered as an identifier, and not as a keyword.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;readonly&quot;, expecting &quot;function&quot; or &quot;const&quot;
	:og:description: This syntax error signals that ``readonly`` is still considered as an identifier, and not as a keyword
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22readonly%22%2C-expecting-%22function%22-or-%22const%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "readonly", expecting "function" or "const"
	:twitter:description: syntax error, unexpected identifier "readonly", expecting "function" or "const": This syntax error signals that ``readonly`` is still considered as an identifier, and not as a keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"readonly\",-expecting-\"function\"-or-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"readonly\",-expecting-\"function\"-or-\"const\".html","name":"syntax error, unexpected identifier \"readonly\", expecting \"function\" or \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:09:22 +0000","dateModified":"Thu, 19 Feb 2026 22:09:22 +0000","description":"This syntax error signals that ``readonly`` is still considered as an identifier, and not as a keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"readonly\",-expecting-\"function\"-or-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This syntax error signals that ``readonly`` is still considered as an identifier, and not as a keyword. This happens when the underlying PHP version is too old for the source code.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       readonly int $property;
   }
   
   ?>

Solutions
_________

+ Remove the ``readonly`` option.
+ Upgrade to PHP 8.1 or more recent.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Classes/ReadonlyUsage <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/ReadonlyUsage.html>`_.
