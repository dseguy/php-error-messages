.. _cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9:

Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9
---------------------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9: A closure created from a non-static method (``$obj-&gt;method(.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9
	:og:description: A closure created from a non-static method (``$obj-&gt;method(
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-bind-method-%25s%3A%3A%25s%28%29-to-object-of-class-%25s%2C-this-will-be-an-error-in-php-9.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9
	:twitter:description: Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9: A closure created from a non-static method (``$obj->method(
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9.html","name":"Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:01:48 +0000","dateModified":"Fri, 24 Jul 2026 17:01:48 +0000","description":"A closure created from a non-static method (``$obj->method(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A closure created from a non-static method (``$obj->method(...)`` or ``Closure::fromCallable()``) can only be bound to an instance of the class the method belongs to, or one of its subclasses. Binding it to an object of an unrelated class, as done above with an instance of ``Y`` while the method is defined on ``X``, is not allowed.

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
   
   class Y {}
   
   $x = new X;
   $fn = $x->method(...);
   $fn2 = Closure::bind($fn, new Y, Y::class);
   var_dump($fn2);
   
   ?>


Literal Examples
****************
+ Cannot bind method X::method() to object of class Y, this will be an error in PHP 9

Solutions
_________

+ Bind the closure to an instance of the class that declares the method, or one of its subclasses.
+ If the method should work on unrelated classes too, extract the logic into a standalone function or a trait shared by both classes.

Related Error Messages
______________________

+ :ref:`cannot-bind-method-%s::%s()-to-object-of-class-%s`
+ :ref:`cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9`
+ :ref:`cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9`

See Also
________

+ `Closure::bind <https://www.php.net/manual/en/closure.bind.php>`_
+ `Closure::bindTo <https://www.php.net/manual/en/closure.bindto.php>`_


In previous PHP versions, this error message used to be :ref:`cannot-bind-method-%s::%s()-to-object-of-class-%s`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `closure <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/closure.html>`_.
