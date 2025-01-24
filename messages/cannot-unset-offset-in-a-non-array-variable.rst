.. _cannot-unset-offset-in-a-non-array-variable:

Cannot unset offset in a non-array variable
-------------------------------------------
 
.. meta::
	:description:
		Cannot unset offset in a non-array variable: The array syntax ``$variable[index]`` is only available for arrays and strings.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot unset offset in a non-array variable
	:og:description: The array syntax ``$variable[index]`` is only available for arrays and strings
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-unset-offset-in-a-non-array-variable.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot unset offset in a non-array variable
	:twitter:description: Cannot unset offset in a non-array variable: The array syntax ``$variable[index]`` is only available for arrays and strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-offset-in-a-non-array-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-unset-offset-in-a-non-array-variable.html","name":"Cannot unset offset in a non-array variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 14 Nov 2024 17:10:58 +0000","dateModified":"Thu, 14 Nov 2024 17:10:58 +0000","description":"The array syntax ``$variable[index]`` is only available for arrays and strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-unset-offset-in-a-non-array-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The array syntax ``$variable[index]`` is only available for arrays and strings. When used on other types, PHP emits a fatal error.  

The boolean ``false`` and the ``null`` value still accept this behavior. The first is deprecated in PHP 8.1, and the second valid in PHP 8.3. 

Example
_______

.. code-block:: php

   <?php
   
   $x = true;
   $x[0] = 1;
   
   ?>

Solutions
_________

+ Check for type before using the array syntax.
+ Keep using consistent types with each variables.
+ Set type with properties to ensure they are consistent.
+ Cast the object to array before usage.

Related Error Messages
______________________

+ :ref:`automatic-conversion-of-false-to-array-is-deprecated`


In previous PHP versions, this error message used to be :ref:`cannot-use-object-of-type-stdclass-as-array`.
