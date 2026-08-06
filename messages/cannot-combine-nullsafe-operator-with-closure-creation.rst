.. _cannot-combine-nullsafe-operator-with-closure-creation:

Cannot combine nullsafe operator with Closure creation
------------------------------------------------------
 
.. meta::
	:description:
		Cannot combine nullsafe operator with Closure creation: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot combine nullsafe operator with Closure creation
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-combine-nullsafe-operator-with-closure-creation.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot combine nullsafe operator with Closure creation
	:twitter:description: Cannot combine nullsafe operator with Closure creation: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-combine-nullsafe-operator-with-closure-creation.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-combine-nullsafe-operator-with-closure-creation.html","name":"Cannot combine nullsafe operator with Closure creation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 16:15:40 +0000","dateModified":"Wed, 05 Aug 2026 16:15:40 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-combine-nullsafe-operator-with-closure-creation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.1 introduced the first class callable syntax, using ``(...)`` to create a ``Closure`` from a method or function call, without invoking it.

The nullsafe operator ``?->`` short-circuits the call when the object is ``null``, evaluating to ``null`` instead. Combined with Closure creation, this would mean the expression sometimes returns a ``Closure`` and sometimes ``null``, which is not a coherent result for the engine to compile.

This combination is therefore forbidden, and detected at compile time.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function foo() {}
   }
   
   $x = new X();
   
   $closure = $x?->foo(...);
   
   ?>

Solutions
_________

+ Use the ``->`` operator instead of ``?->``, making sure the object is never ``null`` at that point.
+ Check the object for ``null`` explicitly, before creating the Closure.

Related Error Messages
______________________

+ :ref:`can't-use-nullsafe-operator-in-write-context`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
