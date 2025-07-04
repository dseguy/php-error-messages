.. _negative-power-of-zero:

Negative power of zero
----------------------
 
.. meta::
	:description:
		Negative power of zero: It is not possible to calculate a negative power of 0: a negative power is, in fact, a division raised to a power, and division by zero is undefined.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Negative power of zero
	:og:description: It is not possible to calculate a negative power of 0: a negative power is, in fact, a division raised to a power, and division by zero is undefined
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/negative-power-of-zero.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Negative power of zero
	:twitter:description: Negative power of zero: It is not possible to calculate a negative power of 0: a negative power is, in fact, a division raised to a power, and division by zero is undefined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/negative-power-of-zero.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/negative-power-of-zero.html","name":"Negative power of zero","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 13:38:18 +0000","dateModified":"Fri, 04 Jul 2025 13:38:18 +0000","description":"It is not possible to calculate a negative power of 0: a negative power is, in fact, a division raised to a power, and division by zero is undefined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/negative-power-of-zero.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to calculate a negative power of 0: a negative power is, in fact, a division raised to a power, and division by zero is undefined. 

It was a silent error until PHP 8.4, and it is now a visible one.

This is also the case with PHP native ``**`` and pow().

Example
_______

.. code-block:: php

   <?php
   
   echo bcpow(0, -1); 
   
   ?>

Solutions
_________

+ Check for the first argument not to be 0, or similar.
+ Catch the exception.

Related Error Messages
______________________

+ :ref:`power-of-base-0-and-negative-exponent-is-deprecated`
