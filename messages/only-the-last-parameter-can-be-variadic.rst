.. _only-the-last-parameter-can-be-variadic:

Only the last parameter can be variadic
---------------------------------------
 
.. meta::
	:description:
		Only the last parameter can be variadic: A variadic parameter, marked with ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only the last parameter can be variadic
	:og:description: A variadic parameter, marked with ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-the-last-parameter-can-be-variadic.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only the last parameter can be variadic
	:twitter:description: Only the last parameter can be variadic: A variadic parameter, marked with ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-the-last-parameter-can-be-variadic.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-the-last-parameter-can-be-variadic.html","name":"Only the last parameter can be variadic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:32:01 +0000","dateModified":"Wed, 05 Aug 2026 11:32:01 +0000","description":"A variadic parameter, marked with ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-the-last-parameter-can-be-variadic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A variadic parameter, marked with ``...``, collects every remaining argument passed to the function into an array. Since it consumes all the arguments left, no parameter can follow it: it must be the last one in the parameter list.

This is checked at compile time, as soon as a parameter is declared after a variadic one.

Example
_______

.. code-block:: php

   <?php
   
   function foo(...$a, $b) {}
   
   ?>

Solutions
_________

+ Move the variadic parameter to the end of the parameter list.
+ Use named arguments instead, if the extra parameter needs to keep a fixed conceptual position.

Related Error Messages
______________________

+ :ref:`variadic-parameter-cannot-have-a-default-value`
+ :ref:`cannot-declare-variadic-promoted-property`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
