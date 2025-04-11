.. _%s()-argument-#%d%s%s%s-cannot-be-passed-by-reference:

%s():-Argument #%d%s%s%s cannot be passed by reference
------------------------------------------------------
 
.. meta::
	:description:
		%s():-Argument #%d%s%s%s cannot be passed by reference: This error is emitted when a literal value is used instead of a data container, such as a variable, or a property.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s():-Argument #%d%s%s%s cannot be passed by reference
	:og:description: This error is emitted when a literal value is used instead of a data container, such as a variable, or a property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29-argument-%23%25d%25s%25s%25s-cannot-be-passed-by-reference.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s():-Argument #%d%s%s%s cannot be passed by reference
	:twitter:description: %s():-Argument #%d%s%s%s cannot be passed by reference: This error is emitted when a literal value is used instead of a data container, such as a variable, or a property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s()-argument-#%d%s%s%s-cannot-be-passed-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s()-argument-#%d%s%s%s-cannot-be-passed-by-reference.html","name":"%s():-Argument #%d%s%s%s cannot be passed by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error is emitted when a literal value is used instead of a data container, such as a variable, or a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s()-argument-#%d%s%s%s-cannot-be-passed-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when a literal value is used instead of a data container, such as a variable, or a property.

In the illustration here, the operator ``->`` returns a property, which can be used with a reference. On the other hand, the null-safe operator ``?->`` cannot be used, as it may return the property or a null literal. Hence, ``?->`` always returns by value, and cannot be used with references.

Example
_______

.. code-block:: php

   <?php
   
   function foo(&$a) {}
   
   $object = (object) ['b' => 1] ;
   foo($object->b); // OK, $
   
   foo($object?->b); // KO : ?-> returns a value
   foo($object?->a); // KO : NULL
   ?>


Literal Examples
****************
+ foo(): argument $a cannot be passed by reference

Solutions
_________

+ Turn the ``?->`` into a ``->``.
+ Remove the reference in the method signature.
+ Store the result in a local variable, and use it in the call.


In more recent PHP versions, this error message is now :ref:`%s():-argument-#%d%s%s%s-could-not-be-passed-by-reference`.
