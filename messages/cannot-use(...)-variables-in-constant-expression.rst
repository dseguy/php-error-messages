.. _cannot-use(...)-variables-in-constant-expression:

Cannot use(...) variables in constant expression
------------------------------------------------
 
.. meta::
	:description:
		Cannot use(...) variables in constant expression: It is possible to have closures in a constant, since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use(...) variables in constant expression
	:og:description: It is possible to have closures in a constant, since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use%28...%29-variables-in-constant-expression.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use(...) variables in constant expression
	:twitter:description: Cannot use(...) variables in constant expression: It is possible to have closures in a constant, since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use(...)-variables-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use(...)-variables-in-constant-expression.html","name":"Cannot use(...) variables in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 20:57:56 +0000","dateModified":"Fri, 07 Nov 2025 20:57:56 +0000","description":"It is possible to have closures in a constant, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use(...)-variables-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to have closures in a constant, since PHP 8.5. Such closure must be static, so that it does not include the current object with ``$this``. It also cannot use the ``use`` clause, as the definition of the closure is outside an execution context: there are no available variables to import in the closure.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       const MY = static function () use ($a) { return 1;};
   }
   
   ?>

Solutions
_________

+ Remove the ``use`` clause of the closure.
+ Move the closure inside a method.

Related Error Messages
______________________

+ :ref:`closures-in-constant-expressions-must-be-static`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
