.. _the-use-statement-with-non-compound-name-'%s':

The use statement with non-compound name \'%s\' has no effect
-------------------------------------------------------------
 
.. meta::
	:description:
		The use statement with non-compound name \'%s\' has no effect: This warning reports a useless ``use`` expression.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The use statement with non-compound name \&#039;%s\&#039; has no effect
	:og:description: This warning reports a useless ``use`` expression
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-use-statement-with-non-compound-name-%27%25s%27.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The use statement with non-compound name \'%s\' has no effect
	:twitter:description: The use statement with non-compound name \'%s\' has no effect: This warning reports a useless ``use`` expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-use-statement-with-non-compound-name-'%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-use-statement-with-non-compound-name-'%s'.html","name":"The use statement with non-compound name \\'%s\\' has no effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:07:00 +0000","dateModified":"Thu, 19 Feb 2026 22:07:00 +0000","description":"This warning reports a useless ``use`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-use-statement-with-non-compound-name-'%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This warning reports a useless ``use`` expression. The ``use`` expression imports the final name of a fully qualified name to be used in the current file. When applying ``use`` to a simple name, without any ``\`` separator, PHP does not import it, as it is already treated as such by default.

Example
_______

.. code-block:: php

   <?php
   
   use Some\Space\Functions; // allow Functions to be used in this file
   use Closure;              // Closure is already handled that way, no need to import it
   
   function foo(Closure $closure) {}
   
   ?>

Solutions
_________

+ Remove the single name use expressions.
+ Fix the imported name to include a namespace, if applicable.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
