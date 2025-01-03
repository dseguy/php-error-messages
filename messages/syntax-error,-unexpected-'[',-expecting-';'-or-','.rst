.. _syntax-error,-unexpected-'[',-expecting-';'-or-',':

syntax error, unexpected '[', expecting ';' or ','
--------------------------------------------------
 
	.. meta::
		:description:
			syntax error, unexpected '[', expecting ';' or ',': Using the array syntax directly on a string was not possible until PHP 8.

		:og:type: article
		:og:title: syntax error, unexpected &#039;[&#039;, expecting &#039;;&#039; or &#039;,&#039;
		:og:description: Using the array syntax directly on a string was not possible until PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%5B%27%2C-expecting-%27%3B%27-or-%27%2C%27.html

Description
___________
 
Using the array syntax directly on a string was not possible until PHP 8.0. Until then, it reported a syntax error.

Example
_______

.. code-block:: php

   <?php
   
   echo 'bar'[1]; // display a
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.0 or more.
+ Put the string in a variable first.
