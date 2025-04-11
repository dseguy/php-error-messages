.. _argument-#%d-(\$%s)-must-be-of-type-%s,-%s-given:

Argument #%d ($%s) must be of type %s, %s given
-----------------------------------------------
 
.. meta::
	:description:
		Argument #%d ($%s) must be of type %s, %s given: This error is emitted when data of a wrong type is given to a typed argument.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Argument #%d ($%s) must be of type %s, %s given
	:og:description: This error is emitted when data of a wrong type is given to a typed argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-%28%24%25s%29-must-be-of-type-%25s%2C-%25s-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Argument #%d ($%s) must be of type %s, %s given
	:twitter:description: Argument #%d ($%s) must be of type %s, %s given: This error is emitted when data of a wrong type is given to a typed argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#%d-($%s)-must-be-of-type-%s,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#%d-($%s)-must-be-of-type-%s,-%s-given.html","name":"Argument #%d ($%s) must be of type %s, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error is emitted when data of a wrong type is given to a typed argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/argument-#%d-($%s)-must-be-of-type-%s,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when data of a wrong type is given to a typed argument. 

The first parameter that fails the type constraint is reported. There might be other type failures after this one, though they are hidden by the first one encountered.

Example
_______

.. code-block:: php

   <?php
   
   function foo(int $x) {}
   
   foo(1); // OK
   
   foo('2'); // OK, with strict_types = 0 
   
   foo('abc'); // not OK
   
   ?>


Literal Examples
****************
+ Argument #1 ($x) must be of type int, string given

Solutions
_________

+ Pass the correct argument to the method.
+ Cast the value to the requested type.
+ Change the type in the signature of the called method.
+ Add the type in the signature of the called method.

Related Error Messages
______________________

+ :ref:`using-array_key_exists()-on-objects-is-deprecated.`


In previous PHP versions, this error message used to be :ref:`using-array_key_exists()-on-objects-is-deprecated.`.
