.. _methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php;-%s-has-a-deprecated-constructor:

Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor
------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor: In PHP 4, the constructor of a class was the method with the same name as the class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor
	:og:description: In PHP 4, the constructor of a class was the method with the same name as the class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php%3B-%25s-has-a-deprecated-constructor.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor
	:twitter:description: Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor: In PHP 4, the constructor of a class was the method with the same name as the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php;-%s-has-a-deprecated-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php;-%s-has-a-deprecated-constructor.html","name":"Methods with the same name as their class will not be constructors in a future version of PHP; %s has a deprecated constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Jan 2025 09:41:15 +0000","dateModified":"Sun, 19 Jan 2025 09:41:15 +0000","description":"In PHP 4, the constructor of a class was the method with the same name as the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php;-%s-has-a-deprecated-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In PHP 4, the constructor of a class was the method with the same name as the class. In the example, the ``X::X`` method is the constructor. This was deprecated in PHP 7.0, in favor of using the ``__construct`` method.

During the deprecation phase, the eponymous method was still used as the constructor, if the ``__construct`` method was not available.


Example
_______

.. code-block:: php

   <?php
   
   class X {
       function X() {}
   }
   
   ?>

Solutions
_________

+ Rename the eponymous method to ``__construct``.
+ Crete the ``__construct`` method, and make it call the eponymous method.
