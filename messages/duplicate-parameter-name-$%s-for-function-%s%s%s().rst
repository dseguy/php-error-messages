.. _duplicate-parameter-name-\$%s-for-function-%s%s%s():

Duplicate parameter name $%s for function %s%s%s()
--------------------------------------------------
 
.. meta::
	:description:
		Duplicate parameter name $%s for function %s%s%s(): It is not allowed to have several times the same parameter in a method, closure or function signature.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Duplicate parameter name $%s for function %s%s%s()
	:og:description: It is not allowed to have several times the same parameter in a method, closure or function signature
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/duplicate-parameter-name-%24%25s-for-function-%25s%25s%25s%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duplicate parameter name $%s for function %s%s%s()
	:twitter:description: Duplicate parameter name $%s for function %s%s%s(): It is not allowed to have several times the same parameter in a method, closure or function signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-parameter-name-$%s-for-function-%s%s%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/duplicate-parameter-name-$%s-for-function-%s%s%s().html","name":"Duplicate parameter name $%s for function %s%s%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 11:17:31 +0000","dateModified":"Fri, 05 Jun 2026 11:17:31 +0000","description":"It is not allowed to have several times the same parameter in a method, closure or function signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/duplicate-parameter-name-$%s-for-function-%s%s%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not allowed to have several times the same parameter in a method, closure or function signature. All the parameters must have different names.

This error appears only in PHP debug mode.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $a, $a) {}
   
   ?>


Literal Examples
****************
+ Duplicate parameter name $a for function foo()

Solutions
_________

+ Remove the parameters with duplicate names.
+ Rename the parameters with duplicate names.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
