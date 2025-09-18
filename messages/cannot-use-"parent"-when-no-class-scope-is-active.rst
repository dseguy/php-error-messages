.. _cannot-use-"parent"-when-no-class-scope-is-active:

Cannot use "parent" when no class scope is active
-------------------------------------------------
 
.. meta::
	:description:
		Cannot use "parent" when no class scope is active: ``parent`` is a keyword that represent the parent class of the current class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use &quot;parent&quot; when no class scope is active
	:og:description: ``parent`` is a keyword that represent the parent class of the current class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%22parent%22-when-no-class-scope-is-active.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use "parent" when no class scope is active
	:twitter:description: Cannot use "parent" when no class scope is active: ``parent`` is a keyword that represent the parent class of the current class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-\"parent\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-\"parent\"-when-no-class-scope-is-active.html","name":"Cannot use \"parent\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Sep 2025 17:13:47 +0000","dateModified":"Wed, 17 Sep 2025 17:13:47 +0000","description":"``parent`` is a keyword that represent the parent class of the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-\"parent\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``parent`` is a keyword that represent the parent class of the current class. When the code is not located inside a class, it cannot have a parent, and so, is forbidden.

Example
_______

.. code-block:: php

   <?php
   
   function foo(parent $argument) { }
   
   ?>

Solutions
_________

+ Convert the function into a method, in a class with a parent.
+ Convert the function into a closure, and assign it a to an object of a class with a parent.
