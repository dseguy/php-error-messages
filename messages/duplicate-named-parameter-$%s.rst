.. _duplicate-named-parameter-\$%s:

Duplicate named parameter $%s
-----------------------------
 
.. meta::
	:description:
		Duplicate named parameter $%s: Parameter shall only be passed once.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Duplicate named parameter $%s
	:og:description: Parameter shall only be passed once
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/duplicate-named-parameter-%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate named parameter $%s
	:twitter:description: Duplicate named parameter $%s: Parameter shall only be passed once
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-named-parameter-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-named-parameter-$%s.html","name":"Duplicate named parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jan 2025 14:04:45 +0000","dateModified":"Fri, 24 Jan 2025 14:04:45 +0000","description":"Parameter shall only be passed once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/duplicate-named-parameter-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Parameter shall only be passed once. For named parameters, this means that the same name shall only be used once when calling the method. 

This problem is never raised with positional arguments, which are automatically indexed. 

There is a distinct error message when this happens to in method calls.

Example
_______

.. code-block:: php

   <?php
   
   function foo($b, $b) {}
   
   #[MyAttribute(a: 'A', a: 'A')]
   class Test {}
   
   ?>


Literal Examples
****************
+ Duplicate named parameter $a
+ Duplicate named parameter $b

Solutions
_________

+ Remove the names of the parameters.
+ Change the name of all the duplicate named parameters, but one.
+ Remove the duplicates named parameters, but one.

Related Error Messages
______________________

+ :ref:`named-parameter-$%s-overwrites-previous-argument`
