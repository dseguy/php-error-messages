.. _only-variable-references-should-be-returned-by-reference:

Only variable references should be returned by reference
--------------------------------------------------------
 
.. meta::
	:description:
		Only variable references should be returned by reference: When a function returns a reference, it must return a variable, a property or an array&#039;s item.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only variable references should be returned by reference
	:og:description: When a function returns a reference, it must return a variable, a property or an array&#039;s item
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-variable-references-should-be-returned-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only variable references should be returned by reference
	:twitter:description: Only variable references should be returned by reference: When a function returns a reference, it must return a variable, a property or an array's item
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-variable-references-should-be-returned-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-variable-references-should-be-returned-by-reference.html","name":"Only variable references should be returned by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 11 Dec 2024 19:07:13 +0000","dateModified":"Wed, 11 Dec 2024 19:07:13 +0000","description":"When a function returns a reference, it must return a variable, a property or an array's item","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-variable-references-should-be-returned-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a function returns a reference, it must return a variable, a property or an array's item. It cannot return a literal value, a constant or an expression.

Example
_______

.. code-block:: php

   <?php
   
   function &foo() {
       return 1;
       
       return B;
   }
   
   ?>

Solutions
_________

+ Put the literal in a variable, and return the variable.
+ Remove the reference in the method signature.

Related Error Messages
______________________

+ :ref:`%s():-argument-#%d%s%s%s-cannot-not-be-passed-by-reference`
