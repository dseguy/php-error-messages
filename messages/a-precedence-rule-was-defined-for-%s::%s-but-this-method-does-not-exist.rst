.. _a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist:

A precedence rule was defined for %s::%s but this method does not exist
-----------------------------------------------------------------------
 
.. meta::
	:description:
		A precedence rule was defined for %s::%s but this method does not exist: When importing the trait, a rule was set up to resolve a method conflict between two methods, while one of them does not exist.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: A precedence rule was defined for %s::%s but this method does not exist
	:og:description: When importing the trait, a rule was set up to resolve a method conflict between two methods, while one of them does not exist
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/a-precedence-rule-was-defined-for-%25s%3A%3A%25s-but-this-method-does-not-exist.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: A precedence rule was defined for %s::%s but this method does not exist
	:twitter:description: A precedence rule was defined for %s::%s but this method does not exist: When importing the trait, a rule was set up to resolve a method conflict between two methods, while one of them does not exist
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html","name":"A precedence rule was defined for %s::%s but this method does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Nov 2025 10:33:51 +0000","dateModified":"Sun, 23 Nov 2025 10:33:51 +0000","description":"When importing the trait, a rule was set up to resolve a method conflict between two methods, while one of them does not exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When importing the trait, a rule was set up to resolve a method conflict between two methods, while one of them does not exist. This conflict resolution may be removed.

Example
_______

.. code-block:: php

   <?php
   
   trait A {}
   
   trait B {
       public function bar() {}
   }
   
   class MyClass {
       use A, B {
           A::bar insteadof B;  // No bar in A
           A::bar as C;         // No bar in A too
       }
   }
   ?>


Literal Examples
****************
+ A precedence rule was defined for A::bar but this method does not exist

Solutions
_________

+ Remove the conflicting rule.
+ Create the missing method in the original trait.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
