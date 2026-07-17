.. _cannot-unbind-\$this-of-closure-using-\$this,-this-will-be-an-error-in-php-9:

Cannot unbind $this of closure using $this, this will be an error in PHP 9
--------------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot unbind $this of closure using $this, this will be an error in PHP 9: A closure literal that references ``$this`` in its body captures the enclosing object when it is created.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot unbind $this of closure using $this, this will be an error in PHP 9
	:og:description: A closure literal that references ``$this`` in its body captures the enclosing object when it is created
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unbind-%24this-of-closure-using-%24this%2C-this-will-be-an-error-in-php-9.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unbind $this of closure using $this, this will be an error in PHP 9
	:twitter:description: Cannot unbind $this of closure using $this, this will be an error in PHP 9: A closure literal that references ``$this`` in its body captures the enclosing object when it is created
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html","name":"Cannot unbind $this of closure using $this, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 21:00:40 +0000","dateModified":"Tue, 14 Jul 2026 21:00:40 +0000","description":"A closure literal that references ``$this`` in its body captures the enclosing object when it is created","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A closure literal that references ``$this`` in its body captures the enclosing object when it is created. Rebinding it to ``null`` with ``bindTo()`` or ``Closure::bind()`` would leave the body referencing ``$this`` with nothing bound to it, so the operation is refused.

A closure that does not use ``$this`` in its body can still be unbound safely; the restriction only applies when ``$this`` is actually referenced.

Since PHP 8.5, this operation already emitted an ``E_WARNING`` and the bind silently failed, returning ``null``. It is now deprecated and will become a fatal error in PHP 9.0.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public $prop = 'hello';
   
       public function getClosure() {
           return function () {
               return $this->prop;
           };
       }
   }
   
   $x = new X;
   $fn = $x->getClosure();
   $fn2 = $fn->bindTo(null);
   var_dump($fn2);
   
   ?>


Literal Examples
****************
+ Cannot unbind $this of closure using $this, this will be an error in PHP 9

Solutions
_________

+ If the closure needs to run without an object context, remove every use of ``$this`` from its body.
+ Keep the closure bound to the object and pass the values it needs as parameters instead of relying on unbinding.

Related Error Messages
______________________

+ :ref:`cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9`
+ :ref:`cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9`

See Also
________

+ `Closure::bindTo <https://www.php.net/manual/en/closure.bindto.php>`_
+ `Closure::bind <https://www.php.net/manual/en/closure.bind.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `closure <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/closure.html>`_.
