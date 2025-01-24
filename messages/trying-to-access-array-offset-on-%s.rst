.. _trying-to-access-array-offset-on-%s:

Trying to access array offset on %s
-----------------------------------
 
.. meta::
	:description:
		Trying to access array offset on %s: Null, boolean (true and false), integers and floats are not valid with the array syntax.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Trying to access array offset on %s
	:og:description: Null, boolean (true and false), integers and floats are not valid with the array syntax
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/trying-to-access-array-offset-on-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trying to access array offset on %s
	:twitter:description: Trying to access array offset on %s: Null, boolean (true and false), integers and floats are not valid with the array syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trying-to-access-array-offset-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/trying-to-access-array-offset-on-%s.html","name":"Trying to access array offset on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 13 Dec 2024 16:42:31 +0000","dateModified":"Fri, 13 Dec 2024 16:42:31 +0000","description":"Null, boolean (true and false), integers and floats are not valid with the array syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/trying-to-access-array-offset-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Null, boolean (true and false), integers and floats are not valid with the array syntax. That syntax uses the square brackets with an index, appended after the value.

Often, such syntax is used on returned values, which may be an array, or false (or null) in case of error: most of the time it is a valid array, but sometimes, it is a scalar type. Such usage is now reported since PHP 8.3.

Example
_______

.. code-block:: php

   <?php
   
   echo null[1];
   //Warning: Trying to access array offset on null
   
   
   $true = true;
   echo $true['a'];
   //Warning: Trying to access array offset on true
   
   $true = false;
   echo $true[[33]]; // also, invalid idnex
   //Warning: Trying to access array offset on false
   
   ?>


Literal Examples
****************
+ Trying to access array offset on true
+ Trying to access array offset on false
+ Trying to access array offset on null

Solutions
_________

+ Check for types before using an array syntax on a returned value.
+ Initialize variables with an array, whenever it will be used with this type later.

Related Error Messages
______________________

+ :ref:`cannot-use-object-of-type-%s-as-array`
