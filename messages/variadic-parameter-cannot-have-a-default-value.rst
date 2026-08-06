.. _variadic-parameter-cannot-have-a-default-value:

Variadic parameter cannot have a default value
----------------------------------------------
 
.. meta::
	:description:
		Variadic parameter cannot have a default value: A variadic parameter, marked with ``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Variadic parameter cannot have a default value
	:og:description: A variadic parameter, marked with ``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/variadic-parameter-cannot-have-a-default-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variadic parameter cannot have a default value
	:twitter:description: Variadic parameter cannot have a default value: A variadic parameter, marked with ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/variadic-parameter-cannot-have-a-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/variadic-parameter-cannot-have-a-default-value.html","name":"Variadic parameter cannot have a default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:32:09 +0000","dateModified":"Wed, 05 Aug 2026 11:32:09 +0000","description":"A variadic parameter, marked with ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/variadic-parameter-cannot-have-a-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A variadic parameter, marked with ``...``, already collects zero or more arguments into an array: when no argument is passed for it, it is simply an empty array. There is no meaning in giving it a default value, since the parameter itself can never be missing from the call, only empty.

This is a compile time check.

Example
_______

.. code-block:: php

   <?php
   
   function foo(...$a = []) {}
   
   ?>

Solutions
_________

+ Remove the default value from the variadic parameter.
+ Check inside the function body whether the collected array is empty, instead of relying on a default value.

Related Error Messages
______________________

+ :ref:`only-the-last-parameter-can-be-variadic`
+ :ref:`cannot-declare-variadic-promoted-property`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
