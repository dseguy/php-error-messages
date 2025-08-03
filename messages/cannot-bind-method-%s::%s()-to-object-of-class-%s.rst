.. _cannot-bind-method-%s::%s()-to-object-of-class-%s:

Cannot bind method %s::%s() to object of class %s
-------------------------------------------------
 
.. meta::
	:description:
		Cannot bind method %s::%s() to object of class %s: This error is reported when a closure is called on an object which is not identical to the the type of the original object.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot bind method %s::%s() to object of class %s
	:og:description: This error is reported when a closure is called on an object which is not identical to the the type of the original object
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-bind-method-%25s%3A%3A%25s%28%29-to-object-of-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot bind method %s::%s() to object of class %s
	:twitter:description: Cannot bind method %s::%s() to object of class %s: This error is reported when a closure is called on an object which is not identical to the the type of the original object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-bind-method-%s::%s()-to-object-of-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-bind-method-%s::%s()-to-object-of-class-%s.html","name":"Cannot bind method %s::%s() to object of class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Aug 2025 20:12:08 +0000","dateModified":"Sun, 03 Aug 2025 20:12:08 +0000","description":"This error is reported when a closure is called on an object which is not identical to the the type of the original object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-bind-method-%s::%s()-to-object-of-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported when a closure is called on an object which is not identical to the the type of the original object.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function method() {    }
   }
   
   class Y { }
   
   $closure = Closure::fromCallable([new X, 'method']);
   $closure->call(new B);
   
   ?>


Literal Examples
****************
+ Cannot bind method A::M() to object of class C

Solutions
_________

+ 
