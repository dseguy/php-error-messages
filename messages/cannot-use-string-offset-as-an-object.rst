.. _cannot-use-string-offset-as-an-object:

Cannot use string offset as an object
-------------------------------------
 
.. meta::
	:description:
		Cannot use string offset as an object: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use string offset as an object
	:og:description: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-string-offset-as-an-object.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use string offset as an object
	:twitter:description: Cannot use string offset as an object: It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-string-offset-as-an-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-string-offset-as-an-object.html","name":"Cannot use string offset as an object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-string-offset-as-an-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character. And in general, it is also possible to chain the array syntax to access properties ``$array[1]->p``. 

Yet, the individual characters of a string are never objects, so it is not possible to use that syntax with them, while reading it from the string.

Example
_______

.. code-block:: php

   <?php
   
   $string = '123';
   
   unset($string[0]->a);
   
   ?>

Solutions
_________

+ Remove the 2nd array syntax when working with a string.

Related Error Messages
______________________

+ :ref:`cannot-use-string-offset-as-an-array`
