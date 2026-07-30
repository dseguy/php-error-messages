.. _cannot-use-isset()-on-the-result-of-an-expression:

Cannot use isset() on the result of an expression
-------------------------------------------------
 
.. meta::
	:description:
		Cannot use isset() on the result of an expression: isset() checks whether a data container, such as a variable, an array element or an object property, exists and is not null.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use isset() on the result of an expression
	:og:description: isset() checks whether a data container, such as a variable, an array element or an object property, exists and is not null
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-isset%28%29-on-the-result-of-an-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use isset() on the result of an expression
	:twitter:description: Cannot use isset() on the result of an expression: isset() checks whether a data container, such as a variable, an array element or an object property, exists and is not null
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-isset()-on-the-result-of-an-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-isset()-on-the-result-of-an-expression.html","name":"Cannot use isset() on the result of an expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:22 +0000","dateModified":"Thu, 30 Jul 2026 07:30:22 +0000","description":"isset() checks whether a data container, such as a variable, an array element or an object property, exists and is not null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-isset()-on-the-result-of-an-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
isset() checks whether a data container, such as a variable, an array element or an object property, exists and is not null; it needs an actual container to look up, not a computed value. Concatenating $a and $b produces a plain expression with no container behind it, so isset() cannot be applied to it directly.

Example
_______

.. code-block:: php

   <?php
   
   $a = 'a';
   $b = 'b';
   
   if (isset($a . $b)) {}
   
   // recommended alternative
   if ($a . $b !== null) {}
   
   ?>

Solutions
_________

+ Compare the expression to null instead: $a . $b !== null.

Related Error Messages
______________________

+ :ref:`cannot-use-isset()-on-the-result-of-an-expression-(you-can-use-"null-!==-expression"-instead)`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
