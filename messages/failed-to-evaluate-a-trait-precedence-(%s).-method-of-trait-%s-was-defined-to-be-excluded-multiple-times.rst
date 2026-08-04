.. _failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times:

Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times
--------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times: The ``insteadof`` operator resolves a conflict between two or more traits that define a method with the same name: it picks the version to keep, and implicitly excludes that method from the traits listed after ``insteadof``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times
	:og:description: The ``insteadof`` operator resolves a conflict between two or more traits that define a method with the same name: it picks the version to keep, and implicitly excludes that method from the traits listed after ``insteadof``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/failed-to-evaluate-a-trait-precedence-%28%25s%29.-method-of-trait-%25s-was-defined-to-be-excluded-multiple-times.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times
	:twitter:description: Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times: The ``insteadof`` operator resolves a conflict between two or more traits that define a method with the same name: it picks the version to keep, and implicitly excludes that method from the traits listed after ``insteadof``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times.html","name":"Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 14:21:52 +0000","dateModified":"Tue, 04 Aug 2026 14:21:52 +0000","description":"The ``insteadof`` operator resolves a conflict between two or more traits that define a method with the same name: it picks the version to keep, and implicitly excludes that method from the traits listed after ``insteadof``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``insteadof`` operator resolves a conflict between two or more traits that define a method with the same name: it picks the version to keep, and implicitly excludes that method from the traits listed after ``insteadof``.

Each trait can only be marked as excluded, for a given method, once. Here, ``B`` is listed twice in the same ``insteadof`` clause for ``hello()``, which is redundant: PHP has nothing more to learn from the second mention, and rejects the declaration outright, rather than silently ignoring the duplicate.

The same error also occurs when the same trait ends up excluded twice for the same method through two separate precedence rules, not just within a single ``insteadof`` list.

Example
_______

.. code-block:: php

   <?php
   
   trait A {
       public function hello() { echo 'A'; }
   }
   
   trait B {
       public function hello() { echo 'B'; }
   }
   
   class X {
       use A, B {
           A::hello insteadof B, B;
       }
   }
   
   ?>


Literal Examples
****************
+ Failed to evaluate a trait precedence (hello). Method of trait B was defined to be excluded multiple times

Solutions
_________

+ Remove the duplicate trait name from the insteadof list.
+ Check whether the trait is already excluded for that method by another precedence rule.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
