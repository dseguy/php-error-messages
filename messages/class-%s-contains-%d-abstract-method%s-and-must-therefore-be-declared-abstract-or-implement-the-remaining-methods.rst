.. _class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods:

Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods
-----------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods: A long as there is one absract method in a class, the whole class must be declared abstract.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods
	:og:description: A long as there is one absract method in a class, the whole class must be declared abstract
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-contains-%25d-abstract-method%25s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods
	:twitter:description: Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods: A long as there is one absract method in a class, the whole class must be declared abstract
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html","name":"Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"A long as there is one absract method in a class, the whole class must be declared abstract","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A long as there is one absract method in a class, the whole class must be declared abstract. That way, it cannot be instantiated: if a method is missing a body for execution, this definitely must be impossible.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       abstract function foo() ; 
   }
   
   ?>


Literal Examples
****************
+ Class X contains 1 abstract method and must therefore be declared abstract or implement the remaining methods

Solutions
_________

+ Remove the abstract option on the method(s) and give the a body block.
+ Add the abstract keyword to the class.

Related Error Messages
______________________

+ :ref:`non-abstract-method-%s::%s()-must-contain-body`
