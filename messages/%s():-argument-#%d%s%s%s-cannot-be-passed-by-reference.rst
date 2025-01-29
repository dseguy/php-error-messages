.. _%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference:

%s(): Argument #%d%s%s%s cannot be passed by reference
------------------------------------------------------
 
.. meta::
	:description:
		%s(): Argument #%d%s%s%s cannot be passed by reference: Passing a literal value, a constant or ``$GLOBALS`` where a reference is requested leads to this error.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s(): Argument #%d%s%s%s cannot be passed by reference
	:og:description: Passing a literal value, a constant or ``$GLOBALS`` where a reference is requested leads to this error
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-argument-%23%25d%25s%25s%25s-cannot-be-passed-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s(): Argument #%d%s%s%s cannot be passed by reference
	:twitter:description: %s(): Argument #%d%s%s%s cannot be passed by reference: Passing a literal value, a constant or ``$GLOBALS`` where a reference is requested leads to this error
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference.html","name":"%s(): Argument #%d%s%s%s cannot be passed by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 29 Jan 2025 09:56:28 +0000","dateModified":"Wed, 29 Jan 2025 09:56:28 +0000","description":"Passing a literal value, a constant or ``$GLOBALS`` where a reference is requested leads to this error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Passing a literal value, a constant or ``$GLOBALS`` where a reference is requested leads to this error. 

For literal and constants, global or class, this is due to the value that can't be modified. It must be put in a variable first.

For ``$GLOBALS``, it is to prevent modifications of its values. It makes the error message a bit surprising. This doesn't apply to other PHP variables.

A reference argument expected a variable, a property, static or not, or an array element. Usually, a variable is the best choice.

Example
_______

.. code-block:: php

   <?php
   
   function foo(&$arg) {}
   
   // passing a literal
   foo([]);
   // passing $GLOBALS
   foo($GLOBALS);
   
   // trying to trim spaces on all GLOBALS
   array_walk( $GLOBALS, trim(...));
   
   ?>


Literal Examples
****************
+ array_walk(): Argument #1 $GLOBALS cannot be passed by reference

Solutions
_________

+ Copy ``$GLOBALS`` to a variable and pass this variable.
+ Copy the constant value to a variable and pass this variable.
+ Copy the literal value to a variable and pass this variable.

Related Error Messages
______________________

+ :ref:`cannot-acquire-reference-to-$globals`


In more recent PHP versions, this error message is now :ref:`%s():-argument-#%d%s%s%s-could-not-be-passed-by-reference`.
