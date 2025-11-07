.. _increment-on-non-numeric-string-is-deprecated,-use-str_increment()-instead:

Increment on non-numeric string is deprecated, use str_increment() instead
--------------------------------------------------------------------------
 
.. meta::
	:description:
		Increment on non-numeric string is deprecated, use str_increment() instead: PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Increment on non-numeric string is deprecated, use str_increment() instead
	:og:description: PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/increment-on-non-numeric-string-is-deprecated%2C-use-str_increment%28%29-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Increment on non-numeric string is deprecated, use str_increment() instead
	:twitter:description: Increment on non-numeric string is deprecated, use str_increment() instead: PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/increment-on-non-numeric-string-is-deprecated,-use-str_increment()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/increment-on-non-numeric-string-is-deprecated,-use-str_increment()-instead.html","name":"Increment on non-numeric string is deprecated, use str_increment() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Nov 2025 09:39:34 +0000","dateModified":"Fri, 07 Nov 2025 09:39:34 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/increment-on-non-numeric-string-is-deprecated,-use-str_increment()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
PHP 8.3 introduced str_increment() and str_decrement(), which update strings by changing the last character's ascii code. It mirrors a famous PHP easter egg, where a string may be incremented with the ``++`` operator. 

In PHP 8.5, this feature is deprecated, and a warning is emitted. There is no deprecation warning for decrementing, as the feature was not implemented on strings.

Example
_______

.. code-block:: php

   <?php
   
   $string = 'aa';
   ++$string;
   
   echo $string;
   
   ?>

Solutions
_________

+ Use str_increment(), instead of ``++`` on string variables.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
