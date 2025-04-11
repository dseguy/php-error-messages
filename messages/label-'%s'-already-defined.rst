.. _label-'%s'-already-defined:

Label '%s' already defined
--------------------------
 
.. meta::
	:description:
		Label '%s' already defined: A goto label has been defined twice or more.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Label &#039;%s&#039; already defined
	:og:description: A goto label has been defined twice or more
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/label-%27%25s%27-already-defined.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Label '%s' already defined
	:twitter:description: Label '%s' already defined: A goto label has been defined twice or more
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/label-'%s'-already-defined.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/label-'%s'-already-defined.html","name":"Label '%s' already defined","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A goto label has been defined twice or more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/label-'%s'-already-defined.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A goto label has been defined twice or more. This is not allowed, as the ``goto`` call won't be able to decide which label to reach. 

Note that a single unused label is allowed, and is considered dead code. 

Multiple identical labels are possible, in different method contexts.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
   	C:
   	C:
   	
   	// valid code, though dead and unused
   	D: 
   }
   
   function bar() {
   	// valid code, though dead and unused
   	D: 
   }
   
   ?>


Literal Examples
****************
+ Label 'C' already defined

Solutions
_________

+ Remove duplicate label.
+ Rename duplicate label.
+ Move the duplicate label to a distinct method.
