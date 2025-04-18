.. _call-to-%s-%s::%s()-from-global-scope:

Call to %s %s::%s() from global scope
-------------------------------------
 
.. meta::
	:description:
		Call to %s %s::%s() from global scope: This error reports that the requested method exists, but is not available from the context of call.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to %s %s::%s() from global scope
	:og:description: This error reports that the requested method exists, but is not available from the context of call
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-%25s-%25s%3A%3A%25s%28%29-from-global-scope.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to %s %s::%s() from global scope
	:twitter:description: Call to %s %s::%s() from global scope: This error reports that the requested method exists, but is not available from the context of call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-%s-%s::%s()-from-global-scope.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-%s-%s::%s()-from-global-scope.html","name":"Call to %s %s::%s() from global scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error reports that the requested method exists, but is not available from the context of call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call-to-%s-%s::%s()-from-global-scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that the requested method exists, but is not available from the context of call. Here, the method is ``private`` and should only be called from within its definition class. 

There are distinct messages for calling an unknown method, or calling a protected method.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public function foo() {}
       private function goo() {}
   }
   
   $x = new X;
   $x->goo();
   
   ?>


Literal Examples
****************
+ Call to private x::goo() from global scope

Solutions
_________

+ Call a public method on that class.
+ Check for typos in the name of the method.
+ Change the visibility of the method, to be able to call it.

Related Error Messages
______________________

+ :ref:`call-to-undefined-method-%s::%s()`
+ :ref:`trying-to-invoke-%s-method-%s::%s()-from-scope-%s`
