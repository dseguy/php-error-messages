.. _only-the-first-byte-will-be-assigned-to-the-string-offset:

Only the first byte will be assigned to the string offset
---------------------------------------------------------
 
.. meta::
	:description:
		Only the first byte will be assigned to the string offset: The array notation is available with strings, to both write and read.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only the first byte will be assigned to the string offset
	:og:description: The array notation is available with strings, to both write and read
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-the-first-byte-will-be-assigned-to-the-string-offset.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only the first byte will be assigned to the string offset
	:twitter:description: Only the first byte will be assigned to the string offset: The array notation is available with strings, to both write and read
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-the-first-byte-will-be-assigned-to-the-string-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-the-first-byte-will-be-assigned-to-the-string-offset.html","name":"Only the first byte will be assigned to the string offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jan 2025 10:08:51 +0000","dateModified":"Thu, 16 Jan 2025 10:08:51 +0000","description":"The array notation is available with strings, to both write and read","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-the-first-byte-will-be-assigned-to-the-string-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The array notation is available with strings, to both write and read. When writing to a string, the new assigned character must be a single character, and even, a single byte. This means that it is not possible to replace multiple characters, or to inject a longer string inside another one with such syntax. 

As a side effect, this also applies to multi-byte characters: since they are represented on two, or more, characters, they cannot be injected in such syntax.


Example
_______

.. code-block:: php

   <?php
   
   $string = 'abc';
   $string[3] = 'd'; 
   // abcd
   $string[4] = 'ef';
   // warning
   // abcde
   $string[5] = '我'; // multi-byte character
   // warning
   // abcde� // <- invisible character at the end of the string
   
   
   ?>

Solutions
_________

+ Use preg_replace() or str_replace() to inject more than one character.
+ Splice the string and insert the new string in-between: ``substr($string, 0, $x).$newString.substr($string,$x+1)``.
