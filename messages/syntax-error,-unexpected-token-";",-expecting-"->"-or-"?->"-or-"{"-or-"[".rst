.. _syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"{"-or-"[":

syntax error, unexpected token ";", expecting "->" or "?->" or "{" or "["
-------------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected token ";", expecting "->" or "?->" or "{" or "[": The ``&amp;`` reference operator turns a value into a reference.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected token &quot;;&quot;, expecting &quot;-&gt;&quot; or &quot;?-&gt;&quot; or &quot;{&quot; or &quot;[&quot;
	:og:description: The ``&amp;`` reference operator turns a value into a reference
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22%3B%22%2C-expecting-%22-%3E%22-or-%22%3F-%3E%22-or-%22%7B%22-or-%22%5B%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected token ";", expecting "->" or "?->" or "{" or "["
	:twitter:description: syntax error, unexpected token ";", expecting "->" or "?->" or "{" or "[": The ``&`` reference operator turns a value into a reference
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"->\"-or-\"?->\"-or-\"{\"-or-\"[\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"->\"-or-\"?->\"-or-\"{\"-or-\"[\".html","name":"syntax error, unexpected token \";\", expecting \"->\" or \"?->\" or \"{\" or \"[\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jan 2025 10:03:45 +0000","dateModified":"Fri, 03 Jan 2025 10:03:45 +0000","description":"The ``&`` reference operator turns a value into a reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-token-\";\",-expecting-\"->\"-or-\"?->\"-or-\"{\"-or-\"[\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``&`` reference operator turns a value into a reference. It works with data containers, such as variables, properties or array elements. It doesn't work on literal constants. 

The error message suggestion to use extra operators such as ``[`` or ``->`` leads to a distinct error: ``Cannot use temporary expression in write context``. The suggestion to use ``{`` is the then-deprecated curly brace syntax for array access. It is still valid in PHP 8.3, but removed in PHP 8.4.

Example
_______

.. code-block:: php

   <?php
   
   $a = &E_ALL;
   
   const B = [1,2,3];
   //Cannot use temporary expression in write context
   $c = &B[2]; 
   
   ?>

Solutions
_________

+ Store the constant in a variable, and make the reference on the variable.
+ Use constants by value, not by reference.

Related Error Messages
______________________

+ :ref:`cannot-use-temporary-expression-in-write-context`


In previous PHP versions, this error message used to be :ref:`syntax-error,-unexpected-';',-expecting-'['`.


In more recent PHP versions, this error message is now :ref:`syntax-error,-unexpected-token-";",-expecting-"->"-or-"?->"-or-"["`.
