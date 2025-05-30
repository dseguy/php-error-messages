.. _%s%s%s()-does-not-accept-unknown-named-parameters:

%s%s%s() does not accept unknown named parameters
-------------------------------------------------
 
.. meta::
	:description:
		%s%s%s() does not accept unknown named parameters: printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s%s%s() does not accept unknown named parameters
	:og:description: printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%25s%25s%28%29-does-not-accept-unknown-named-parameters.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s%s%s() does not accept unknown named parameters
	:twitter:description: %s%s%s() does not accept unknown named parameters: printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s%s%s()-does-not-accept-unknown-named-parameters.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s%s%s()-does-not-accept-unknown-named-parameters.html","name":"%s%s%s() does not accept unknown named parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s%s%s()-does-not-accept-unknown-named-parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that. Those extra arguments are only positional. Hence, it is not possible to use ellipsis on an array with string keys. 

This error also applies to array functions that handles the parameters as a list: in a list, the names are not important.

Example
_______

.. code-block:: php

   <?php
   
   printf('%s', ...['a' => 2]);
   
   array_merge([1, 2], a: [3, 4]);
   
   array_intersect([1, 2], a: [3, 4]);
   
   array_diff_key([1, 2], [3, 4], a: [5, 6]);
   
   ?>


Literal Examples
****************
+ printf() does not accept unknown named parameters
+ array_merge() does not accept unknown named parameters
+ array_diff_key() does not accept unknown named parameters
+ array_intersect() does not accept unknown named parameters

Solutions
_________

+ Use array_values() on the array, before the ellipsis.
