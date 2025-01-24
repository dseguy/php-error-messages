.. _invalid-argument-supplied-for-foreach():

Invalid argument supplied for foreach()
---------------------------------------
 
.. meta::
	:description:
		Invalid argument supplied for foreach(): foreach() works on arrays or objects.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Invalid argument supplied for foreach()
	:og:description: foreach() works on arrays or objects
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/invalid-argument-supplied-for-foreach%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Invalid argument supplied for foreach()
	:twitter:description: Invalid argument supplied for foreach(): foreach() works on arrays or objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-argument-supplied-for-foreach().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-argument-supplied-for-foreach().html","name":"Invalid argument supplied for foreach()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Oct 2024 20:49:57 +0000","dateModified":"Thu, 17 Oct 2024 18:01:46 +0000","description":"foreach() works on arrays or objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invalid-argument-supplied-for-foreach().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
foreach() works on arrays or objects. For the array, all the elements of the array are read; for the objects, it is either the public properties, read like an array, or the Iterator interface, which uses specific methods. 

Then, any other type is forbidden to be used with foreach(). This means all scalars elements, including string, integer and null. 

Example
_______

.. code-block:: php

   <?php
   
   foreach(1234 as $b) {
   	echo $b;
   }
   
   ?>

Solutions
_________

+ Check that the source of the foreach can be used with is_iterable().


In more recent PHP versions, this error message is now :ref:`foreach()-argument-must-be-of-type-array|object`.
