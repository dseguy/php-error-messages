.. _must-be-a-valid-class-name,-%s-given:

must be a valid class name, %s given
------------------------------------
 
.. meta::
	:description:
		must be a valid class name, %s given: get_parent_class() expects an argument, which must be either an object, or a valid class name.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a valid class name, %s given
	:og:description: get_parent_class() expects an argument, which must be either an object, or a valid class name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-valid-class-name%2C-%25s-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a valid class name, %s given
	:twitter:description: must be a valid class name, %s given: get_parent_class() expects an argument, which must be either an object, or a valid class name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-class-name,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-class-name,-%s-given.html","name":"must be a valid class name, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Apr 2025 19:30:28 +0000","dateModified":"Wed, 02 Apr 2025 19:07:16 +0000","description":"get_parent_class() expects an argument, which must be either an object, or a valid class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-valid-class-name,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
get_parent_class() expects an argument, which must be either an object, or a valid class name. The object's class name will be used; for the valid class name, it is recommended to use the ``::class`` operator on the class name, and also, to check if the class exists first.

Example
_______

.. code-block:: php

   <?php
   
   $a = 1;
   get_parent_class($a);
   
   ?>


Literal Examples
****************
+ must be a valid class name, null given
+ must be a valid class name, integer given

Solutions
_________

+ Check that the parameter is an object.
+ Make the string a valid class name, with the ``::class`` operator.
+ Check if the string is an existing class, with a call to ``class_exists()``.
