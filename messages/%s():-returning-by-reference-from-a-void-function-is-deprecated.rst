.. _%s():-returning-by-reference-from-a-void-function-is-deprecated:

%s(): Returning by reference from a void function is deprecated
---------------------------------------------------------------
 
.. meta::
	:description:
		%s(): Returning by reference from a void function is deprecated: The void type means that the function is not returning anything.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s(): Returning by reference from a void function is deprecated
	:og:description: The void type means that the function is not returning anything
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-returning-by-reference-from-a-void-function-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s(): Returning by reference from a void function is deprecated
	:twitter:description: %s(): Returning by reference from a void function is deprecated: The void type means that the function is not returning anything
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-returning-by-reference-from-a-void-function-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s():-returning-by-reference-from-a-void-function-is-deprecated.html","name":"%s(): Returning by reference from a void function is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Mar 2025 15:32:07 +0000","dateModified":"Mon, 03 Mar 2025 15:32:07 +0000","description":"The void type means that the function is not returning anything","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s():-returning-by-reference-from-a-void-function-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The void type means that the function is not returning anything. So, it doesn't matter if that nothing is returned by value or by reference.

If the returned value is, nontheless, collected, it will be null in any case.

Example
_______

.. code-block:: php

   <?php
   
   function &foo(): void { }
   ?>


Literal Examples
****************
+ foo(): Returning by reference from a void function is deprecated

Solutions
_________

+ Remove the reference of the function.
+ Remove the type void, and return an actual value.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `return_reference_on_void.php <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/return_reference_on_void.php.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `return_reference_on_void.php <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/return_reference_on_void.php.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Structures/ReturnVoid <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/ReturnVoid.html>`_.
