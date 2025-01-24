.. _automatic-conversion-of-false-to-array-is-deprecated:

Automatic conversion of false to array is deprecated
----------------------------------------------------
 
.. meta::
	:description:
		Automatic conversion of false to array is deprecated: The array syntax ``$variable[index]`` is only available for arrays and strings.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Automatic conversion of false to array is deprecated
	:og:description: The array syntax ``$variable[index]`` is only available for arrays and strings
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/automatic-conversion-of-false-to-array-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Automatic conversion of false to array is deprecated
	:twitter:description: Automatic conversion of false to array is deprecated: The array syntax ``$variable[index]`` is only available for arrays and strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/automatic-conversion-of-false-to-array-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/automatic-conversion-of-false-to-array-is-deprecated.html","name":"Automatic conversion of false to array is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Dec 2024 09:57:40 +0000","dateModified":"Tue, 31 Dec 2024 09:57:40 +0000","description":"The array syntax ``$variable[index]`` is only available for arrays and strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/automatic-conversion-of-false-to-array-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The array syntax ``$variable[index]`` is only available for arrays and strings. Yet, false is an edge case: PHP used to convert automatically, and silently, the boolean to array, when that syntax was used. This is called autovivification. 

The other boolean, ``true`` behaves the same way, with a different error message. 

This feature is used to initialize variables with false, and then convert it to array as needed. 

Since PHP 8.1, it is a deprecated behavior. 

Example
_______

.. code-block:: php

   <?php
   
   $variable = false;
   $variable[0] = 1;
   // $variable is now an array
   
   class X {
       public bool|array $property = false;
   }
   
   $x = new X;
   $x->property['d'] = 3;
   
   ?>

Solutions
_________

+ Use an empty array as default value.
+ Test the type of the variable before using it as an array.

Related Error Messages
______________________

+ :ref:`cannot-unset-offset-in-a-non-array-variable`
+ :ref:`cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s`
