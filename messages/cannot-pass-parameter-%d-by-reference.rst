.. _cannot-pass-parameter-%d-by-reference:

Cannot pass parameter %d by reference
-------------------------------------
 
.. meta::
	:description:
		Cannot pass parameter %d by reference: When a parameter is set to be passed by reference, there is a ``&amp;`` character before its name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot pass parameter %d by reference
	:og:description: When a parameter is set to be passed by reference, there is a ``&amp;`` character before its name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-pass-parameter-%25d-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot pass parameter %d by reference
	:twitter:description: Cannot pass parameter %d by reference: When a parameter is set to be passed by reference, there is a ``&`` character before its name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-pass-parameter-%d-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-pass-parameter-%d-by-reference.html","name":"Cannot pass parameter %d by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 13:01:40 +0000","dateModified":"Fri, 04 Jul 2025 13:01:40 +0000","description":"When a parameter is set to be passed by reference, there is a ``&`` character before its name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-pass-parameter-%d-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a parameter is set to be passed by reference, there is a ``&`` character before its name. In that case, the argument must be a data container, such as a variable, a property, a static property, an array index, but it cannot be a literal value, a constant, or the result of an expression.

Example
_______

.. code-block:: php

   <?php
   
   function foo(&$a) {}
   
   // invalid cases
   foo(1);
   foo(1 + 2);
   
   const A = 1;
   foo(A);
   
   class X {
       const B = 2;
   }
   foo(X::B);
   
   ?>


Literal Examples
****************
+ Cannot pass parameter 1 by reference

Solutions
_________

+ Store the value in a variable and passe the variable.
+ Remove the reference in the method signature.

Related Error Messages
______________________

+ :ref:`%s%s%s():-argument-#%d%s%s%s-must-be-passed-by-reference,-value-given`
+ :ref:`parameter-%d-must-be-passed-by-reference`


In more recent PHP versions, this error message is now :ref:`%s()-argument-#%d%s%s%s-cannot-be-passed-by-reference`.
