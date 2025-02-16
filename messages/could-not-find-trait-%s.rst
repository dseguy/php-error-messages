.. _could-not-find-trait-%s:

Could not find trait %s
-----------------------
 
.. meta::
	:description:
		Could not find trait %s: A trait is named in a use expression inside a class, but it doesn&#039;t exist, or is not yet loaded by PHP.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Could not find trait %s
	:og:description: A trait is named in a use expression inside a class, but it doesn&#039;t exist, or is not yet loaded by PHP
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/could-not-find-trait-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Could not find trait %s
	:twitter:description: Could not find trait %s: A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/could-not-find-trait-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/could-not-find-trait-%s.html","name":"Could not find trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/could-not-find-trait-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A trait is named in a use expression inside a class, but it doesn't exist, or is not yet loaded by PHP. 

The trait may be included in a different use expression. Then, it generates a distinct error message. 

Note that when the trait exists and is known to PHP, there is a distinct error message.

Example
_______

.. code-block:: php

   <?php
   trait A {
       public function foo(){}
   }
   
   class B {
       use A {
           C::foo as tf;
       }
   }
   
   ?>


Literal Examples
****************
+ Could not find trait C

Solutions
_________

+ Remove the expression that mentions the non-existing trait.
+ Create the missing trait.
+ Add the trait to the class.
