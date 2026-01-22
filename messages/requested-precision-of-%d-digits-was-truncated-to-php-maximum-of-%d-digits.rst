.. _requested-precision-of-%d-digits-was-truncated-to-php-maximum-of-%d-digits:

Requested precision of %d digits was truncated to PHP maximum of %d digits
--------------------------------------------------------------------------
 
.. meta::
	:description:
		Requested precision of %d digits was truncated to PHP maximum of %d digits: A decimal number is being represented as a string, with a precision which is above the precision available to PHP itself.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Requested precision of %d digits was truncated to PHP maximum of %d digits
	:og:description: A decimal number is being represented as a string, with a precision which is above the precision available to PHP itself
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/requested-precision-of-%25d-digits-was-truncated-to-php-maximum-of-%25d-digits.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Requested precision of %d digits was truncated to PHP maximum of %d digits
	:twitter:description: Requested precision of %d digits was truncated to PHP maximum of %d digits: A decimal number is being represented as a string, with a precision which is above the precision available to PHP itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/requested-precision-of-%d-digits-was-truncated-to-php-maximum-of-%d-digits.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/requested-precision-of-%d-digits-was-truncated-to-php-maximum-of-%d-digits.html","name":"Requested precision of %d digits was truncated to PHP maximum of %d digits","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 09:24:24 +0000","dateModified":"Thu, 22 Jan 2026 09:24:24 +0000","description":"A decimal number is being represented as a string, with a precision which is above the precision available to PHP itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/requested-precision-of-%d-digits-was-truncated-to-php-maximum-of-%d-digits.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A decimal number is being represented as a string, with a precision which is above the precision available to PHP itself. Since no more data is available, the requested precision was not met.

Example
_______

.. code-block:: php

   <?php
   
   printf(%.988f,1.23456789e10);
   
   ?>


Literal Examples
****************
+ Requested precision of 20 digits was truncated to PHP maximum of 14 digits

Solutions
_________

+ Reduce the requested precision, down to 54 maximum.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
