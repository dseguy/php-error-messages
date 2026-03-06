.. _(expression)::class-cannot-be-used-in-constant-expressions:

(expression)::class cannot be used in constant expressions
----------------------------------------------------------
 
.. meta::
	:description:
		(expression)::class cannot be used in constant expressions: This error appears when the value of a constant is not entirely static, but may depend on context.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: (expression)::class cannot be used in constant expressions
	:og:description: This error appears when the value of a constant is not entirely static, but may depend on context
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%28expression%29%3A%3Aclass-cannot-be-used-in-constant-expressions.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: (expression)::class cannot be used in constant expressions
	:twitter:description: (expression)::class cannot be used in constant expressions: This error appears when the value of a constant is not entirely static, but may depend on context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/(expression)::class-cannot-be-used-in-constant-expressions.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/(expression)::class-cannot-be-used-in-constant-expressions.html","name":"(expression)::class cannot be used in constant expressions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Mar 2026 22:27:03 +0000","dateModified":"Fri, 06 Mar 2026 22:27:03 +0000","description":"This error appears when the value of a constant is not entirely static, but may depend on context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/(expression)::class-cannot-be-used-in-constant-expressions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when the value of a constant is not entirely static, but may depend on context. In this case, the ``self::A`` will only be known when the trait t is used in a class.

Example
_______

.. code-block:: php

   <?php
   
   trait T {
       const A = parent::class;
       const B = self::A::class;
   }
   
   ?>

Solutions
_________

+ Keep values of constants simple.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
