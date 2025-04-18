.. _could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available:

Could not check compatibility between %s and %s, because class %s is not available
----------------------------------------------------------------------------------
 
.. meta::
	:description:
		Could not check compatibility between %s and %s, because class %s is not available: This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``V``, compared to ``W``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Could not check compatibility between %s and %s, because class %s is not available
	:og:description: This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``V``, compared to ``W``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/could-not-check-compatibility-between-%25s-and-%25s%2C-because-class-%25s-is-not-available.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Could not check compatibility between %s and %s, because class %s is not available
	:twitter:description: Could not check compatibility between %s and %s, because class %s is not available: This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``V``, compared to ``W``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available.html","name":"Could not check compatibility between %s and %s, because class %s is not available","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``V``, compared to ``W``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``V``, compared to ``W``. 

PHP checks all the classes and interfaces whose definitions are already known, and, eventually, calls autoload to get the missing classes. When all avenues are exhausted, PHP yields this error. 

In fact, if checking compatibility fails, the code will not run later anyway.

Example
_______

.. code-block:: php

   <?php
   
   class V {
       function foo() : X { }
   }
   
   class W extends W {
       function foo() : Y { }
   }
   
   ?>


Literal Examples
****************
+ Could not check compatibility between V::foo() and W::foo(), because class X is not available

Solutions
_________

+ Use existing classes or interfaces as type.
+ Fix typos in type names.
+ Add any missing class or interface.
