.. _returning-by-reference-from-a-void-function-is-deprecated:

Returning by reference from a void function is deprecated
---------------------------------------------------------
 
.. meta::
	:description:
		Returning by reference from a void function is deprecated: The return type ``void`` means that no value is returned, not even NULL.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Returning by reference from a void function is deprecated
	:og:description: The return type ``void`` means that no value is returned, not even NULL
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/returning-by-reference-from-a-void-function-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Returning by reference from a void function is deprecated
	:twitter:description: Returning by reference from a void function is deprecated: The return type ``void`` means that no value is returned, not even NULL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/returning-by-reference-from-a-void-function-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/returning-by-reference-from-a-void-function-is-deprecated.html","name":"Returning by reference from a void function is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 17:50:01 +0000","dateModified":"Mon, 24 Mar 2025 17:50:01 +0000","description":"The return type ``void`` means that no value is returned, not even NULL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/returning-by-reference-from-a-void-function-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The return type ``void`` means that no value is returned, not even NULL. This means that the ``&`` option has no value here. Since PHP 8.1, this is reported as deprecated.

In the end, it has no value to collect the returned value of a void function, reference or not.

Example
_______

.. code-block:: php

   <?php
   
   function &foo() : void { }
   
   ?>

Solutions
_________

+ Do not collect the returned valueo of a void function.
+ Remove the reference in the method definition.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `return_reference_on_void <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/return_reference_on_void.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Functions/NoReferencedVoid <https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/NoReferencedVoid.html>`_.
