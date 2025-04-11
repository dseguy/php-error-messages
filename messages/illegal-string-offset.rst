.. _illegal-string-offset:

illegal string offset
---------------------
 
.. meta::
	:description:
		illegal string offset: String shall use the array syntax, with the square brackets.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: illegal string offset
	:og:description: String shall use the array syntax, with the square brackets
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/illegal-string-offset.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: illegal string offset
	:twitter:description: illegal string offset: String shall use the array syntax, with the square brackets
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-string-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-string-offset.html","name":"illegal string offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"String shall use the array syntax, with the square brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/illegal-string-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
String shall use the array syntax, with the square brackets. Then, the index in that syntax must be an integer, or must be cast to integer. 

When the index cannot be converted to an integer, this warning is displayed. PHP proceeds to cast the value to integer, and use it. It will often be 0, but not always.

An extended error also appear if the result of the conversion is larger than the length of the string.

Example
_______

.. code-block:: php

   <?php
     var_dump(foobar[4foo]);
     // displays 'a' + a warning
   
     var_dump(foobar[-4foo]);
     // displays 'o' + a warning
   ?>

Solutions
_________

+ Use a cast operator to make the conversion explicit.
+ Check the type of the index to be integer before using it.
+ Use substr() to access a specific offset.

Related Error Messages
______________________

+ :ref:`uninitialized-string-offset`
