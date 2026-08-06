.. _%s-function-%s::%s()-cannot-contain-body:

%s function %s::%s() cannot contain body
----------------------------------------
 
.. meta::
	:description:
		%s function %s::%s() cannot contain body: A method that is abstract -- either explicitly declared ``abstract``, or implicitly abstract because it belongs to an interface -- is only a signature: it must not have an implementation.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s function %s::%s() cannot contain body
	:og:description: A method that is abstract -- either explicitly declared ``abstract``, or implicitly abstract because it belongs to an interface -- is only a signature: it must not have an implementation
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-function-%25s%3A%3A%25s%28%29-cannot-contain-body.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s function %s::%s() cannot contain body
	:twitter:description: %s function %s::%s() cannot contain body: A method that is abstract -- either explicitly declared ``abstract``, or implicitly abstract because it belongs to an interface -- is only a signature: it must not have an implementation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-function-%s::%s()-cannot-contain-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-function-%s::%s()-cannot-contain-body.html","name":"%s function %s::%s() cannot contain body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 09:15:14 +0000","dateModified":"Thu, 06 Aug 2026 09:15:14 +0000","description":"A method that is abstract -- either explicitly declared ``abstract``, or implicitly abstract because it belongs to an interface -- is only a signature: it must not have an implementation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-function-%s::%s()-cannot-contain-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A method that is abstract -- either explicitly declared ``abstract``, or implicitly abstract because it belongs to an interface -- is only a signature: it must not have an implementation.

The first ``%s`` in the message is ``Interface`` when the method is declared inside an ``interface``, and ``Abstract`` when it is an explicitly ``abstract`` method of a class or trait.

Example
_______

.. code-block:: php

   <?php
   
   interface Colorful {
       function color() {
           return 'red';
       }
   }
   
   ?>


Literal Examples
****************
+ Interface function Colorful::color() cannot contain body
+ Abstract function C::color() cannot contain body

Solutions
_________

+ Remove the method body, keeping only the signature followed by a semicolon.
+ Remove the `abstract` keyword, or move the method out of the interface, if it should have an implementation.

Related Error Messages
______________________

+ :ref:`%s-method-%s::%s()-must-not-be-abstract`
+ :ref:`non-abstract-method-%s::%s()-must-contain-body`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
