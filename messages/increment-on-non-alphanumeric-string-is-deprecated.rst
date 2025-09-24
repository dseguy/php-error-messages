.. _increment-on-non-alphanumeric-string-is-deprecated:

Increment on non-alphanumeric string is deprecated
--------------------------------------------------
 
.. meta::
	:description:
		Increment on non-alphanumeric string is deprecated: Incrementing a string in a variable is an old darling PHP feature.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Increment on non-alphanumeric string is deprecated
	:og:description: Incrementing a string in a variable is an old darling PHP feature
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/increment-on-non-alphanumeric-string-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Increment on non-alphanumeric string is deprecated
	:twitter:description: Increment on non-alphanumeric string is deprecated: Incrementing a string in a variable is an old darling PHP feature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/increment-on-non-alphanumeric-string-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/increment-on-non-alphanumeric-string-is-deprecated.html","name":"Increment on non-alphanumeric string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Sep 2025 17:30:50 +0000","dateModified":"Wed, 24 Sep 2025 17:30:50 +0000","description":"Incrementing a string in a variable is an old darling PHP feature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/increment-on-non-alphanumeric-string-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Incrementing a string in a variable is an old darling PHP feature. As long as the last character is an ascii letter, it is incremented to the next ascii value, or wrap to a. 

This feature is deprecated since PHP 8.3, and it is replaced by a call to str_increment() and str_decrement() (the last one is a new feature).

Example
_______

.. code-block:: php

   <?php
   
   // Increment on non-alphanumeric string is deprecated! (in PHP 8.5)
   $a = 'aaa';
   echo ++$a;
   
   // Increment on non-alphanumeric string is deprecated
   $a = 'aaa!';
   echo ++$a;
   
   ?>

Solutions
_________

+ Use str_increment().
+ Change the generating system entirely.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `incrementNonAlphanumeric <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/incrementNonAlphanumeric.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `incrementNonAlphanumeric <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/incrementNonAlphanumeric.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.
