.. _increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php:

Increment on type bool has no effect, this will change in the next major version of PHP
---------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Increment on type bool has no effect, this will change in the next major version of PHP: Post increment on a boolean leaves the value unchanged.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Increment on type bool has no effect, this will change in the next major version of PHP
	:og:description: Post increment on a boolean leaves the value unchanged
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/increment-on-type-bool-has-no-effect%2C-this-will-change-in-the-next-major-version-of-php.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Increment on type bool has no effect, this will change in the next major version of PHP
	:twitter:description: Increment on type bool has no effect, this will change in the next major version of PHP: Post increment on a boolean leaves the value unchanged
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html","name":"Increment on type bool has no effect, this will change in the next major version of PHP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Mar 2025 21:29:24 +0000","dateModified":"Tue, 25 Mar 2025 21:29:24 +0000","description":"Post increment on a boolean leaves the value unchanged","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Post increment on a boolean leaves the value unchanged. While PHP updates strings, integers, floats with the post-increment operator, booleans are immune. 

Until PHP 8.3, it was silently done. In PHP 8.3, it raises a deprecation warning, and it will be removed in PHP 9.0. 

Post increment, pre increment, as well as increment and decrement are affected by that warning. str_increment() and str_decrement() refuses to use boolean, due to type.

Example
_______

.. code-block:: php

   <?php
   
   $a = true;
   $a++;
   // $a = true
   
   $b = false;
   --$b;
   // $b = false
   
   ?>

Solutions
_________

+ Avoid initializing variables with booleans before incrementing them.
+ In case of doubt, check the type before the increment.

Related Error Messages
______________________

+ :ref:`decrement-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php`
+ :ref:`decrement-on-type-null-has-no-effect,-this-will-change-in-the-next-major-version-of-php`

See Also
________

+ `NewPHPerrormessagesinPHP83 <https://www.exakat.io/en/new-php-error-messages-in-php-8-3/>`_
