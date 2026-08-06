.. _cannot-use-variable-\$%ps-twice:

Cannot use variable $%pS twice
------------------------------
 
.. meta::
	:description:
		Cannot use variable $%pS twice: The ``use`` clause of a closure lists the variables imported from the enclosing scope.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use variable $%pS twice
	:og:description: The ``use`` clause of a closure lists the variables imported from the enclosing scope
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-variable-%24%25ps-twice.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use variable $%pS twice
	:twitter:description: Cannot use variable $%pS twice: The ``use`` clause of a closure lists the variables imported from the enclosing scope
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-variable-$%ps-twice.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-variable-$%ps-twice.html","name":"Cannot use variable $%pS twice","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:31:45 +0000","dateModified":"Wed, 05 Aug 2026 11:31:45 +0000","description":"The ``use`` clause of a closure lists the variables imported from the enclosing scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-variable-$%ps-twice.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``use`` clause of a closure lists the variables imported from the enclosing scope. Each variable can only appear once in that list: importing the same variable twice, whether by value or by reference, is redundant and not allowed.

This is checked at compile time, as the ``use`` list is processed.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
       $a = 1;
   
       return function () use ($a, $a) {
           return $a;
       };
   }
   
   ?>


Literal Examples
****************
+ Cannot use variable $a twice

Solutions
_________

+ Remove the duplicate entry in the ``use`` clause.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
