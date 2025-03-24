.. _syntax-error,-unexpected-'throw'-(t_throw):

syntax error, unexpected 'throw' (T_THROW)
------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected 'throw' (T_THROW): ``throw`` is not an expression until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;throw&#039; (T_THROW)
	:og:description: ``throw`` is not an expression until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27throw%27-%28t_throw%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected 'throw' (T_THROW)
	:twitter:description: syntax error, unexpected 'throw' (T_THROW): ``throw`` is not an expression until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'throw'-(t_throw).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'throw'-(t_throw).html","name":"syntax error, unexpected 'throw' (T_THROW)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 17:48:27 +0000","dateModified":"Mon, 24 Mar 2025 17:48:27 +0000","description":"``throw`` is not an expression until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-'throw'-(t_throw).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``throw`` is not an expression until PHP 8.0. Until then, it cannot be used as part of another expression, such as the left part of ``or``, an argument, or inside parenthesis. 

After PHP 8.0, one could use it as part of an expression.

Example
_______

.. code-block:: php

   <?php
   
   $x ?? throw new \Exception('Missing value for x');
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.0 or more recent.
+ Convert the ``or`` to an ``ifthen`` structure.

Changed Behavior
________________

This error may appear in different PHP versions `throwIsAnExpression <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/throwIsAnExpression.html>`_.
