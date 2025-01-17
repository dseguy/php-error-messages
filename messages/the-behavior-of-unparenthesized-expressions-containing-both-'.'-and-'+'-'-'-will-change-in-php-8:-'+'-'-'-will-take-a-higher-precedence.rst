.. _the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'+'-'-'-will-change-in-php-8:-'+'-'-'-will-take-a-higher-precedence:

The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence
---------------------------------------------------------------------------------------------------------------------------------------
 
	.. meta::
		:description:
			The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence: ``+``/``-`` and ``.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: The behavior of unparenthesized expressions containing both &#039;.&#039; and &#039;+&#039;/&#039;-&#039; will change in PHP 8: &#039;+&#039;/&#039;-&#039; will take a higher precedence
		:og:description: ``+``/``-`` and ``
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-behavior-of-unparenthesized-expressions-containing-both-%27.%27-and-%27%2B%27-%27-%27-will-change-in-php-8%3A-%27%2B%27-%27-%27-will-take-a-higher-precedence.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence
	:twitter:description: The behavior of unparenthesized expressions containing both '.' and '+'/'-' will change in PHP 8: '+'/'-' will take a higher precedence: ``+``/``-`` and ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
``+``/``-`` and ``.`` operators used to have the same priority. This meant that expressions which mixed them would see them executed from left to right. This was confusing, so PHP 8.0 has made the addition the highest priority, closer to human way of reading the code.

Example
_______

.. code-block:: php

   <?php
   
   $b = 2;
   $a = 'a '. $b + 1;
   
   ?>

Solutions
_________

+ Add parenthesis to make the code less ambiguous.

Related Error Messages
______________________

+ :ref:`the-behavior-of-unparenthesized-expressions-containing-both-'.'-and-'>>'-'<<'-will-change-in-php-8:-'<<'-'>>'-will-take-a-higher-precedence`
