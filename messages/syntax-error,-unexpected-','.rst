.. _syntax-error,-unexpected-',':

syntax error, unexpected ','
----------------------------
 
.. meta::
	:description:
		syntax error, unexpected ',': Commas are used as a separator in lists of items, such as parameters, arguments, elements of an array.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;,&#039;
	:og:description: Commas are used as a separator in lists of items, such as parameters, arguments, elements of an array
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%2C%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected ','
	:twitter:description: syntax error, unexpected ',': Commas are used as a separator in lists of items, such as parameters, arguments, elements of an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-','.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-','.html","name":"syntax error, unexpected ','","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Commas are used as a separator in lists of items, such as parameters, arguments, elements of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-','.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Commas are used as a separator in lists of items, such as parameters, arguments, elements of an array. When such list is supposed to have only one element, the syntax error appears. 

This happens with ``switch``, ``match()``, ``if()``, or parenthesis, which all allow one expression, not two, although they might be confused with a function call.

It also happens with curly braces, which uses semi-colon ``;`` as a separator.

The unexpected ``,`` appears when there is nothing between separators: for example, an empty argument, or a missing variable in a ``global`` call. The only situation where it is acceptable is inside a ``list()`` expression.

Example
_______

.. code-block:: php

   <?php
   
   // only one expression for switch, parenthesis, etc.
   switch(2,3);
   (1,2);
   
   // blocks use ; as separator.
   {3,4}
   
   // comma must separate something
   global $a,, $b;
   
   ?>

Solutions
_________

+ Check if the expression accepts more than one expression.
+ Review commas directly inside a curly braces block.
