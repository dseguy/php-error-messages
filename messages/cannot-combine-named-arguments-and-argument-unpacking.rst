.. _cannot-combine-named-arguments-and-argument-unpacking:

Cannot combine named arguments and argument unpacking
-----------------------------------------------------
 
	.. meta::
		:description:
			Cannot combine named arguments and argument unpacking: In PHP 8.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Cannot combine named arguments and argument unpacking
		:og:description: In PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-combine-named-arguments-and-argument-unpacking.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot combine named arguments and argument unpacking
	:twitter:description: Cannot combine named arguments and argument unpacking: In PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
In PHP 8.0, named parameters were introduced. They allow the naming of a parameter, which is used later to assign the value to the parameter, based on names and not on position.

Initially, it was not possible to mix unpacked arguments from an array and parameters. 


Example
_______

.. code-block:: php

   <?php
   
   function foo(...$params) { 
       print_r($params); 
   }
   
   $args = [1, 2];
   foo(...$args, params: 1);
   
   ?>

Solutions
_________

+ Upgrade PHP version to 8.1 or later.
+ Move the arguments in the array, and unpack it.
