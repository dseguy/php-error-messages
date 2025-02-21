.. _division-of-php_int_min-by--1-is-not-an-integer:

Division of PHP_INT_MIN by -1 is not an integer
-----------------------------------------------
 
.. meta::
	:description:
		Division of PHP_INT_MIN by -1 is not an integer: In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Division of PHP_INT_MIN by -1 is not an integer
	:og:description: In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/division-of-php_int_min-by--1-is-not-an-integer.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Division of PHP_INT_MIN by -1 is not an integer
	:twitter:description: Division of PHP_INT_MIN by -1 is not an integer: In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/division-of-php_int_min-by--1-is-not-an-integer.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/division-of-php_int_min-by--1-is-not-an-integer.html","name":"Division of PHP_INT_MIN by -1 is not an integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/division-of-php_int_min-by--1-is-not-an-integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer. 

In fact, ``- PHP_INT_MIN = PHP_INT_MAX + 1``: PHP_INT_MIN is larger than PHP_INT_MAX, in absolute value. It implies that multiplying, or dividing it by -1, cannot be represented as a integer. 

Since the ``intdiv()`` has a return type of ``int``, returning a float is not possible. Hence, the specific error. 

Any other argument is valid, as it will be within the range of the integers. 

Last, using the ``/`` operator works, since the operator doesn't have a return type.

Example
_______

.. code-block:: php

   <?php
   
   intdiv(PHP_MIN_INT, -1);
   
   ?>

Solutions
_________

+ Check both operands before feeding them to the intdiv() function.
+ Use ``/``, and then check if it is an integer or not.
+ Convert the values to float, and then, convert the result of the division to integer.
