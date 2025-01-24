.. _call-to-%s-method-%s::%s()-from-%s%s:

Call to %s method %s::%s() from %s%s
------------------------------------
 
.. meta::
	:description:
		Call to %s method %s::%s() from %s%s: A ``private`` method shall only be called from within its own class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to %s method %s::%s() from %s%s
	:og:description: A ``private`` method shall only be called from within its own class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-%25s-method-%25s%3A%3A%25s%28%29-from-%25s%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to %s method %s::%s() from %s%s
	:twitter:description: Call to %s method %s::%s() from %s%s: A ``private`` method shall only be called from within its own class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-%s-method-%s::%s()-from-%s%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-%s-method-%s::%s()-from-%s%s.html","name":"Call to %s method %s::%s() from %s%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Jan 2025 21:30:03 +0000","dateModified":"Sun, 19 Jan 2025 21:30:03 +0000","description":"A ``private`` method shall only be called from within its own class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call-to-%s-method-%s::%s()-from-%s%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A ``private`` method shall only be called from within its own class. It cannot be called from another class, or from the global space. In particular, the method cannot be called directly, or indirectly: for example, ``new X`` indirectly calls the ``__construct`` method. 

A ``protected`` method shall only be called from within its own class, or any of it parent or children. It cannot be called from another non-related class, or from the global space. In particular, the method cannot be called directly, or indirectly: for example, ``new X`` indirectly calls the ``__construct`` method. 

A ``public`` method may be called from anywhere in the code.


Example
_______

.. code-block:: php

   <?php
   
   class X {
       //This is also the case with proctected __construct
       private function __construct() {}
   
       static public function factory() {
           return new X();
       }
   }
   
   //This is not possible
   $x = new X();
   
   ?>


Literal Examples
****************
+ Call to private method X::__construct() from global scope

Solutions
_________

+ Check that the call to the method, and the visibility of the method are compatible.


In previous PHP versions, this error message used to be :ref:`call-to-%s-%s::%s()-from-invalid`.
