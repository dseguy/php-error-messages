.. _%s%s%s():-return-value-must-be-of-type-%s,-%s-returned:

%s%s%s(): Return value must be of type %s, %s returned
------------------------------------------------------
 
.. meta::
	:description:
		%s%s%s(): Return value must be of type %s, %s returned: This error appears when calling a method with a return value, but without an explicit return statement.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s%s%s(): Return value must be of type %s, %s returned
	:og:description: This error appears when calling a method with a return value, but without an explicit return statement
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%25s%25s%28%29%3A-return-value-must-be-of-type-%25s%2C-%25s-returned.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s%s%s(): Return value must be of type %s, %s returned
	:twitter:description: %s%s%s(): Return value must be of type %s, %s returned: This error appears when calling a method with a return value, but without an explicit return statement
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s%s%s():-return-value-must-be-of-type-%s,-%s-returned.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s%s%s():-return-value-must-be-of-type-%s,-%s-returned.html","name":"%s%s%s(): Return value must be of type %s, %s returned","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Oct 2025 15:06:02 +0000","dateModified":"Sat, 25 Oct 2025 15:06:02 +0000","description":"This error appears when calling a method with a return value, but without an explicit return statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s%s%s():-return-value-must-be-of-type-%s,-%s-returned.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when calling a method with a return value, but without an explicit return statement. This means that when the method reachs its end, eventually, it will end without a returned value. Yet, the method signature declares that it will return a specific type.

The error is also emitted for property hooks, in particular the ``get`` one: its return type is the same as the type of the property.

A different error message is returned when an empty ``return`` statement is used.

Example
_______

.. code-block:: php

   <?php
   
   function foo() : int {}
   
   class X {
       public int $p {
           // The type of the property is the return type of the hook
           get => [$this->p];
       }
   }
   
   ?>


Literal Examples
****************
+ foo(): Return value must be of type int, none returned

Solutions
_________

+ Add a return call, with a valid value.
+ Remove the return type.
+ Add a null to the return type, and return it (void is not possible with another type).

Related Error Messages
______________________

+ :ref:`a-function-with-return-type-must-return-a-value`
