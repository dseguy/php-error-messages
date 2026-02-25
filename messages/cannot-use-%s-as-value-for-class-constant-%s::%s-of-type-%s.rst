.. _cannot-use-%s-as-value-for-class-constant-%s::%s-of-type-%s:

Cannot use %s as value for class constant %s::%s of type %s
-----------------------------------------------------------
 
.. meta::
	:description:
		Cannot use %s as value for class constant %s::%s of type %s: This error appears when there is a mismatch between the value of a constant, and its declared type.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use %s as value for class constant %s::%s of type %s
	:og:description: This error appears when there is a mismatch between the value of a constant, and its declared type
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%25s-as-value-for-class-constant-%25s%3A%3A%25s-of-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use %s as value for class constant %s::%s of type %s
	:twitter:description: Cannot use %s as value for class constant %s::%s of type %s: This error appears when there is a mismatch between the value of a constant, and its declared type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-value-for-class-constant-%s::%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-value-for-class-constant-%s::%s-of-type-%s.html","name":"Cannot use %s as value for class constant %s::%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Feb 2026 15:49:58 +0000","dateModified":"Wed, 25 Feb 2026 15:49:58 +0000","description":"This error appears when there is a mismatch between the value of a constant, and its declared type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-%s-as-value-for-class-constant-%s::%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when there is a mismatch between the value of a constant, and its declared type.

Note that there is not type juggling, so the value of the constant must match the type exactly. Consider that ``strict_types`` always applies in this case.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       const int A = 'abc';
       const int B = '123';
       const int C = 3, D = 'abc';
   }
   
   ?>

Solutions
_________

+ Remove the constant type.
+ Replace the constant type.
+ Replace the constant value.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
