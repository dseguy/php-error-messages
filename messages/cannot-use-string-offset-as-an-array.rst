.. _cannot-use-string-offset-as-an-array:

Cannot use string offset as an array
------------------------------------
 
.. meta::
	:description:
		Cannot use string offset as an array: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use string offset as an array
	:og:description: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-string-offset-as-an-array.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use string offset as an array
	:twitter:description: Cannot use string offset as an array: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-string-offset-as-an-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-string-offset-as-an-array.html","name":"Cannot use string offset as an array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 02 Dec 2024 20:15:23 +0000","dateModified":"Mon, 02 Dec 2024 20:15:23 +0000","description":"It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-string-offset-as-an-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character. And in general, it is also possible to chain the array syntax to access multi-dimensionnal elements ``$array[1][2]``. 

Yet, the individual characters of a string are not arrays, so it is not possible to use that syntax with them, while reading it from the string. 

On the other hand, it is possible to assign the character to a variable: PHP considers it then as a normal string.


Example
_______

.. code-block:: php

   <?php
   
   $string = '123';
   
   unset($string[0][1]);
   
   ?>

Solutions
_________

+ Remove the 2nd array syntax when working with a string.
+ Assign the character to a variable, and then use it as a string.

Related Error Messages
______________________

+ :ref:`cannot-use-string-offset-as-an-object`
