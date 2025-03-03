.. _recursion-detected:

Recursion detected
------------------
 
.. meta::
	:description:
		Recursion detected: The ``compact`` function accepts an array of arguments.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Recursion detected
	:og:description: The ``compact`` function accepts an array of arguments
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/recursion-detected.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursion detected
	:twitter:description: Recursion detected: The ``compact`` function accepts an array of arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/recursion-detected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/recursion-detected.html","name":"Recursion detected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Mar 2025 15:56:43 +0000","dateModified":"Mon, 03 Mar 2025 15:56:43 +0000","description":"The ``compact`` function accepts an array of arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/recursion-detected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``compact`` function accepts an array of arguments. The function is actually recursive, and searches for everything recursively. This leads to potential infinite recursion, if the provided array contains a link to itself.

Example
_______

.. code-block:: php

   <?php
   
   $a = 1;
   $arr1 = array('a', &$arr1);
   try {
       var_dump(compact($arr1));
   } catch (Error $e) {
       echo $e->getMessage() . \n;
   }
   
   ?>

Solutions
_________

+ Flatten the array into one level only.
+ Remove the self references.
+ Do not use array known to host self references, such as ``$GLOBALS``.
