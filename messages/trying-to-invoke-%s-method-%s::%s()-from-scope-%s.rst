.. _trying-to-invoke-%s-method-%s::%s()-from-scope-%s:

Trying to invoke %s method %s::%s() from scope %s
-------------------------------------------------
 
.. meta::
	:description:
		Trying to invoke %s method %s::%s() from scope %s: This error reports that the requested method exists, but is not available from the context of call.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Trying to invoke %s method %s::%s() from scope %s
	:og:description: This error reports that the requested method exists, but is not available from the context of call
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/trying-to-invoke-%25s-method-%25s%3A%3A%25s%28%29-from-scope-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trying to invoke %s method %s::%s() from scope %s
	:twitter:description: Trying to invoke %s method %s::%s() from scope %s: This error reports that the requested method exists, but is not available from the context of call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trying-to-invoke-%s-method-%s::%s()-from-scope-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trying-to-invoke-%s-method-%s::%s()-from-scope-%s.html","name":"Trying to invoke %s method %s::%s() from scope %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"This error reports that the requested method exists, but is not available from the context of call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/trying-to-invoke-%s-method-%s::%s()-from-scope-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that the requested method exists, but is not available from the context of call. Here, the method is ``protected`` and should only be called from a child class of ``x``. 

There are distinct messages for calling an unknown method, or calling a private method.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       protected function foo() {}
   }
   
   class Y {
       function g() {
           $x = new X;
           $x->foo();
       }
   }
   
   (new Y)->g();
   
   ?>

Solutions
_________

+ Check the name of the method for typo.
+ Check the object of the method is the correct one.

Related Error Messages
______________________

+ :ref:`call-to-undefined-method-%s::%s()`
+ :ref:`call-to-%s-%s::%s()-from-global-scope`
