.. _%d-arguments-are-required,-%d:

%d arguments are required, %d given
-----------------------------------
 
.. meta::
	:description:
		%d arguments are required, %d given: The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %d arguments are required, %d given
	:og:description: The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25d-arguments-are-required%2C-%25d.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %d arguments are required, %d given
	:twitter:description: %d arguments are required, %d given: The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%d-arguments-are-required,-%d.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%d-arguments-are-required,-%d.html","name":"%d arguments are required, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%d-arguments-are-required,-%d.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument. In the illustration code, there are 4 expected arguments, on top of the first one, and only 2 arguments, including the first one.

This error message is related to the PHP native functions ``printf()``, ``vprintf()``, ``sprintf()``, ``fprintf()``, ``vfprintf()``.

Example
_______

.. code-block:: php

   <?php
   
   // count() has one or two arguments
   count($array, $recursive, $tooMany);
   
   // printf()'s number of arguments depends on the first one
   printf('%s %s %s %s', $variable);
   
   ?>


Literal Examples
****************
+ 4 arguments are required, 2 given

Solutions
_________

+ Reduce the number of %s in the first argument.
+ Add the missing argument in the function call.
+ Replace the %s by %%s.


In previous PHP versions, this error message used to be :ref:`too-few-arguments`.
