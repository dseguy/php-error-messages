.. _generators-cannot-return-values-using-"return":

Generators cannot return values using "return"
----------------------------------------------
 
.. meta::
	:description:
		Generators cannot return values using "return": In PHP 5.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Generators cannot return values using &quot;return&quot;
	:og:description: In PHP 5
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/generators-cannot-return-values-using-%22return%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Generators cannot return values using "return"
	:twitter:description: Generators cannot return values using "return": In PHP 5
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
In PHP 5.x, generators were not allowed to have return values. This feature was added in PHP 7.0, and, after running the full course, generator deliver their return value when calling the ``getReturn`` method.

Example
_______

.. code-block:: php

   <?php
   
   function foo() {
       yield 1;
       
       return 2;
   }
   
   ?>

Solutions
_________

+ Upgrade to PHP 7.0 or more recent.
+ Use a global variable to export data from the method.
