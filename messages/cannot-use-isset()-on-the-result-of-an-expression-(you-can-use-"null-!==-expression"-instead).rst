.. _cannot-use-isset()-on-the-result-of-an-expression-(you-can-use-"null-!==-expression"-instead):

Cannot use isset() on the result of an expression (you can use "null !== expression" instead)
---------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot use isset() on the result of an expression (you can use "null !== expression" instead): isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use isset() on the result of an expression (you can use &quot;null !== expression&quot; instead)
	:og:description: isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-isset%28%29-on-the-result-of-an-expression-%28you-can-use-%22null-%21%3D%3D-expression%22-instead%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use isset() on the result of an expression (you can use "null !== expression" instead)
	:twitter:description: Cannot use isset() on the result of an expression (you can use "null !== expression" instead): isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-isset()-on-the-result-of-an-expression-(you-can-use-\"null-!==-expression\"-instead).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-isset()-on-the-result-of-an-expression-(you-can-use-\"null-!==-expression\"-instead).html","name":"Cannot use isset() on the result of an expression (you can use \"null !== expression\" instead)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:59:40 +0000","dateModified":"Fri, 21 Feb 2025 18:59:40 +0000","description":"isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-isset()-on-the-result-of-an-expression-(you-can-use-\"null-!==-expression\"-instead).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
isset() is meant to check the existence of an data container, such as a variable, an array element, a property of an object. It is not meant to check if an expression is null, because it is not a data container. 

Expressions are valid with isset within a data container, though.

Example
_______

.. code-block:: php

   <?php
   
   $a = 'a';
   $b = 'b';
   if (isset($a . $b)) {}
   
   // recommended by the error itself
   if ($a . $b !== null) {}
   
   // expression are valid with isset within a data container
   if (isset($array[$a . $b])) {}
   if (isset(${$a . $b})) {}
   
   ?>

Solutions
_________

+ Use a comparison to null with an expression.
