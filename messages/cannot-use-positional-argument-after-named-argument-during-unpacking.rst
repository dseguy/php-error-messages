.. _cannot-use-positional-argument-after-named-argument-during-unpacking:

Cannot use positional argument after named argument during unpacking
--------------------------------------------------------------------
 
.. meta::
	:description:
		Cannot use positional argument after named argument during unpacking: This error appears when using an array with a mix of integer and string keys, and spread it as arguments.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use positional argument after named argument during unpacking
	:og:description: This error appears when using an array with a mix of integer and string keys, and spread it as arguments
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-positional-argument-after-named-argument-during-unpacking.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use positional argument after named argument during unpacking
	:twitter:description: Cannot use positional argument after named argument during unpacking: This error appears when using an array with a mix of integer and string keys, and spread it as arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-named-argument-during-unpacking.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-named-argument-during-unpacking.html","name":"Cannot use positional argument after named argument during unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Jul 2025 18:28:53 +0000","dateModified":"Tue, 01 Jul 2025 18:28:53 +0000","description":"This error appears when using an array with a mix of integer and string keys, and spread it as arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-positional-argument-after-named-argument-during-unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when using an array with a mix of integer and string keys, and spread it as arguments. The actual order of the array is used as the order of the arguments in the function call. Then, integer keys are used as positional arguments, and string keys are as named arguments.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b, $c) {}
   
   // unpacking argument, but positional argument is misplaced
   $arguments = ['a' => 1, 2, 'c' => 3];
   foo(...$arguments);
   
   // make everyone positional. It works since order is already correct
   foo(...array_values($arguments));
   
   ?>

Solutions
_________

+ Add the missing argument names to finish the argument array.
+ Move the positional argument to the beginning of the array (array_unshift, or append it at the array creation), when the argument order makes it possible.
+ Use ksort() on the keys, when it makes sense.

Related Error Messages
______________________

+ :ref:`named-parameter-$%s-overwrites-previous-argument`
