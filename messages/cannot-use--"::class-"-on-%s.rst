.. _cannot-use--"::class-"-on-%s:

Cannot use \"::class\" on %s
----------------------------
 
.. meta::
	:description:
		Cannot use \"::class\" on %s: Since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use \&quot;::class\&quot; on %s
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22%3A%3Aclass-%22-on-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use \"::class\" on %s
	:twitter:description: Cannot use \"::class\" on %s: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"::class-\"-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use--\"::class-\"-on-%s.html","name":"Cannot use \\\"::class\\\" on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:29:54 +0000","dateModified":"Thu, 30 Jul 2026 07:29:54 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use--\"::class-\"-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.0, expr::class can be used on any object expression to retrieve its class name, not only on class names, self, static or parent. When the expression is a scalar literal, such as an integer, float, string or boolean, PHP can already tell at compile time that it will never hold an object, and rejects the construct right away instead of waiting for a runtime error. %s is replaced with a description of the offending value.

Example
_______

.. code-block:: php

   <?php
   
   echo 10::class;
   
   ?>

Solutions
_________

+ Only use ::class on a class name, or on an expression that can hold an object.

Related Error Messages
______________________

+ :ref:`cannot-use-dynamic-class-name-in-constant-expression`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
