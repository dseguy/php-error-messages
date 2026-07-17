.. _cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9:

Cannot rebind scope of closure created from function, this will be an error in PHP 9
------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot rebind scope of closure created from function, this will be an error in PHP 9: A closure created from a plain, top-level function (``Closure::fromCallable(&#039;foo&#039;)`` or ``foo(.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot rebind scope of closure created from function, this will be an error in PHP 9
	:og:description: A closure created from a plain, top-level function (``Closure::fromCallable(&#039;foo&#039;)`` or ``foo(
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-rebind-scope-of-closure-created-from-function%2C-this-will-be-an-error-in-php-9.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot rebind scope of closure created from function, this will be an error in PHP 9
	:twitter:description: Cannot rebind scope of closure created from function, this will be an error in PHP 9: A closure created from a plain, top-level function (``Closure::fromCallable('foo')`` or ``foo(
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html","name":"Cannot rebind scope of closure created from function, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 21:00:19 +0000","dateModified":"Tue, 14 Jul 2026 21:00:19 +0000","description":"A closure created from a plain, top-level function (``Closure::fromCallable('foo')`` or ``foo(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A closure created from a plain, top-level function (``Closure::fromCallable('foo')`` or ``foo(...)``) has no class scope: it was never attached to an object or a class in the first place. Passing a scope argument to ``Closure::bind()`` or ``Closure::bindTo()`` on such a closure has nothing to rebind.

Since PHP 8.5, this operation already emitted an ``E_WARNING`` and the bind silently failed, returning ``null``. It is now deprecated and will become a fatal error in PHP 9.0.

Example
_______

.. code-block:: php

   <?php
   
   class X {}
   
   function foo() {
       return __FUNCTION__;
   }
   
   $fn = Closure::fromCallable('foo');
   $fn2 = Closure::bind($fn, new X, X::class);
   var_dump($fn2);
   
   ?>


Literal Examples
****************
+ Cannot rebind scope of closure created from function, this will be an error in PHP 9

Solutions
_________

+ Do not attempt to bind a scope to a closure created from a plain function; it has none.
+ If scoped behaviour is required, define the closure inside the class (as a method or a property initializer) instead of wrapping a free function.

Related Error Messages
______________________

+ :ref:`cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9`
+ :ref:`cannot-rebind-scope-of-closure-created-from-method`
+ :ref:`cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9`

See Also
________

+ `Closure::bind <https://www.php.net/manual/en/closure.bind.php>`_
+ `Closure::fromCallable <https://www.php.net/manual/en/closure.fromcallable.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `closure <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/closure.html>`_.
