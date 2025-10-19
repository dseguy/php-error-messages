.. _%s():-argument-#%d%s%s%s-could-not-be-passed-by-reference:

%s(): Argument #%d%s%s%s could not be passed by reference
---------------------------------------------------------
 
.. meta::
	:description:
		%s(): Argument #%d%s%s%s could not be passed by reference: Methods arguments may be passed by value or by reference.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s(): Argument #%d%s%s%s could not be passed by reference
	:og:description: Methods arguments may be passed by value or by reference
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-argument-%23%25d%25s%25s%25s-could-not-be-passed-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s(): Argument #%d%s%s%s could not be passed by reference
	:twitter:description: %s(): Argument #%d%s%s%s could not be passed by reference: Methods arguments may be passed by value or by reference
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-argument-#%d%s%s%s-could-not-be-passed-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-argument-#%d%s%s%s-could-not-be-passed-by-reference.html","name":"%s(): Argument #%d%s%s%s could not be passed by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Oct 2025 10:21:41 +0000","dateModified":"Sun, 19 Oct 2025 10:21:41 +0000","description":"Methods arguments may be passed by value or by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s():-argument-#%d%s%s%s-could-not-be-passed-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Methods arguments may be passed by value or by reference. The first one is the default behavior, and the second one is optional: it is identified with the ``&``, before the name of the argument.

When an argument is passed by reference, the calling context passes a variable, and conserves a handle to the modified variable after the execution of the method. The handle points to a data container, such as a variable, a property, a static property or a array item. 

When passing literal values or constants, global or class, this error is emitted, as there cannot be a reference to them. They can only be passed by value.

This error message is emitted when a value is returned, and feed into a reference argument.

Example
_______

.. code-block:: php

   <?php
   
   function foo(int &$int) {
       // doSomething
   }
   
   foo(-3);
   
   ?>


Literal Examples
****************
+ foo(): Argument #3 ($int) could not be passed by reference

Solutions
_________

+ Store the value in a variable, and pass the variable to the method.
+ Remove the reference from the called method signature.

Related Error Messages
______________________

+ :ref:`only-variable-references-should-be-returned-by-reference`


In previous PHP versions, this error message used to be :ref:`%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference`.
