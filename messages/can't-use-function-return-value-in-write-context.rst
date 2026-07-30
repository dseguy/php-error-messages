.. _can't-use-function-return-value-in-write-context:

Can't use function return value in write context
------------------------------------------------
 
.. meta::
	:description:
		Can't use function return value in write context: A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Can&#039;t use function return value in write context
	:og:description: A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/can%27t-use-function-return-value-in-write-context.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Can't use function return value in write context
	:twitter:description: Can't use function return value in write context: A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/can't-use-function-return-value-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/can't-use-function-return-value-in-write-context.html","name":"Can't use function return value in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:42:25 +0000","dateModified":"Thu, 30 Jul 2026 07:42:25 +0000","description":"A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/can't-use-function-return-value-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar. A function call only produces a value; it does not designate a storage location, so the engine has nothing to write to, unset, or reference, and rejects the call outright at compile time, before it is ever executed.

Example
_______

.. code-block:: php

   <?php
   
   function getValue() {
   	return 5;
   }
   
   getValue() = 3;
   
   unset(getValue());
   
   ?>

Solutions
_________

+ Store the return value in a variable first, then use the variable in the write context: $v = getValue(); unset($v);

Related Error Messages
______________________

+ :ref:`can't-use-method-return-value-in-write-context`
+ :ref:`cannot-use-result-of-built-in-function-in-write-context`
+ :ref:`can't-use-nullsafe-operator-in-write-context`
+ :ref:`cannot-use-temporary-expression-in-write-context`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
