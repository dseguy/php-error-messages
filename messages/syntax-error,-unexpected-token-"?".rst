.. _syntax-error,-unexpected-token-"?":

syntax error, unexpected token "?"
----------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token "?": ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;?&quot;
	:og:description: ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3F%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token "?"
	:twitter:description: syntax error, unexpected token "?": ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?\".html","name":"syntax error, unexpected token \"?\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\"?\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``?`` is used in several syntaxes in PHP. 

+ as ``null`` in a type specification (argument, returntype, property, class constant), when it is the first type specified: ``?A $a``
+ as the terny operator ``$condition ? $then : $else``. Then, the condition must be a complete expression.

Example
_______

.. code-block:: php

   <?php
   
   // an unfinished ternary operation
   $a = 1 + ? 3 : 2 ;
   
   // ? should be written null in a type specification
   function foo(a|? $a) {}
   
   ?>

Solutions
_________

+ Finish the expression before the ``?`` in a ternary operation.
+ Use the ``null`` type when specifying a type.

Related Error Messages
______________________

+ :ref:`syntax-error,-unexpected-token-"??"`
