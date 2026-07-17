.. _cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9:

Cannot rebind scope of closure created from method, this will be an error in PHP 9
----------------------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot rebind scope of closure created from method, this will be an error in PHP 9: When a closure is created from an object method (``$obj-&gt;method(.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot rebind scope of closure created from method, this will be an error in PHP 9
	:og:description: When a closure is created from an object method (``$obj-&gt;method(
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-rebind-scope-of-closure-created-from-method%2C-this-will-be-an-error-in-php-9.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot rebind scope of closure created from method, this will be an error in PHP 9
	:twitter:description: Cannot rebind scope of closure created from method, this will be an error in PHP 9: When a closure is created from an object method (``$obj->method(
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html","name":"Cannot rebind scope of closure created from method, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 17:21:07 +0000","dateModified":"Wed, 15 Jul 2026 17:21:07 +0000","description":"When a closure is created from an object method (``$obj->method(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a closure is created from an object method (``$obj->method(...)``), its scope and binding are tied to the originating object. Attempting to rebind that closure to a different scope or object using ``Closure::bind()`` or ``Closure::bindTo()`` is not allowed.

In PHP 7.0, this was silently accepted. Since PHP 8.0, it raises a warning. In PHP 9.0, it will be a fatal error.

The restriction exists because a method-bound closure captures the object's internal context. Rebinding it would violate encapsulation by granting access to private and protected members of an unrelated class.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function method() {}
   }
   
   class Y {}
   
   $x = new X;
   $fn = $x->method(...);
   $fn->bindTo($x, Y::class);
   
   ?>


Literal Examples
****************
+ Cannot rebind scope of closure created from method, this will be an error in PHP 9

Solutions
_________

+ Create the closure from within the class itself using ``[self, 'method']`` or ``Closure::fromCallable()`` to allow rebinding.
+ Avoid rebinding method-bound closures; use ``call_user_func()`` or ``$closure(...)`` with the original binding.
+ If you need a rebound closure, create a standalone closure that wraps the method call.

Related Error Messages
______________________

+ :ref:`cannot-rebind-scope-of-closure-created-from-method`
+ :ref:`cannot-bind-an-instance-to-a-static-closure`
+ :ref:`cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9`
+ :ref:`cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9`
+ :ref:`cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9`
+ :ref:`cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9`

See Also
________

+ `Closure::bind <https://www.php.net/manual/en/closure.bind.php>`_
+ `Closure::fromCallable <https://www.php.net/manual/en/closure.fromcallable.php>`_


In previous PHP versions, this error message used to be :ref:`cannot-rebind-scope-of-closure-created-from-method`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
