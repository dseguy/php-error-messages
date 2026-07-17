.. _cannot-unbind-\$this-of-method,-this-will-be-an-error-in-php-9:

Cannot unbind $this of method, this will be an error in PHP 9
-------------------------------------------------------------
 
.. meta::
	:description:
		Cannot unbind $this of method, this will be an error in PHP 9: A closure created directly from a non-static method (``$obj-&gt;method(.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot unbind $this of method, this will be an error in PHP 9
	:og:description: A closure created directly from a non-static method (``$obj-&gt;method(
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unbind-%24this-of-method%2C-this-will-be-an-error-in-php-9.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unbind $this of method, this will be an error in PHP 9
	:twitter:description: Cannot unbind $this of method, this will be an error in PHP 9: A closure created directly from a non-static method (``$obj->method(
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html","name":"Cannot unbind $this of method, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 21:00:46 +0000","dateModified":"Tue, 14 Jul 2026 21:00:46 +0000","description":"A closure created directly from a non-static method (``$obj->method(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A closure created directly from a non-static method (``$obj->method(...)`` or ``ReflectionMethod::getClosure()``) is a ``$this``-call in disguise: the method body may use ``$this`` freely, whether or not it is written explicitly. Since PHP 8.0 removed static calls to non-static methods, ``$this`` is guaranteed to exist whenever such a method runs, so ``bindTo(null)`` can no longer strip it.

Since PHP 8.5, this operation already emitted an ``E_WARNING`` and the bind silently failed, returning ``null``. It is now deprecated and will become a fatal error in PHP 9.0.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function method() {
           return __METHOD__;
       }
   }
   
   $x = new X;
   $fn = $x->method(...);
   $fn2 = $fn->bindTo(null);
   var_dump($fn2);
   
   ?>


Literal Examples
****************
+ Cannot unbind $this of method, this will be an error in PHP 9

Solutions
_________

+ Keep the closure bound to the object; call it with the original binding instead of unbinding ``$this``.
+ If a scope-free version of the logic is needed, extract it into a standalone function that does not rely on the method's ``$this``.

Related Error Messages
______________________

+ :ref:`cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9`
+ :ref:`cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9`

See Also
________

+ `Closure::bindTo <https://www.php.net/manual/en/closure.bindto.php>`_
+ `Closure::bind <https://www.php.net/manual/en/closure.bind.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `closure <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/closure.html>`_.
