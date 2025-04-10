.. _%s-is-not-supported-on-type-%s:

%s is not supported on type %s
------------------------------
 
.. meta::
	:description:
		%s is not supported on type %s: This error is reported when an operation is attempted indirectly on a wrong type of data.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s is not supported on type %s
	:og:description: This error is reported when an operation is attempted indirectly on a wrong type of data
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s-is-not-supported-on-type-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s is not supported on type %s
	:twitter:description: %s is not supported on type %s: This error is reported when an operation is attempted indirectly on a wrong type of data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-is-not-supported-on-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s-is-not-supported-on-type-%s.html","name":"%s is not supported on type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Apr 2025 20:58:41 +0000","dateModified":"Thu, 10 Apr 2025 20:58:41 +0000","description":"This error is reported when an operation is attempted indirectly on a wrong type of data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s-is-not-supported-on-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported when an operation is attempted indirectly on a wrong type of data. Here, there is an attempt to add 3 values, one of which is an array.

Example
_______

.. code-block:: php

   <?php
   
   $array = [ 1, 2, [3]];
   print array_sum($array);
   
   $array = [ 1, 2, (object) [3]];
   print array_product($array);
   
   ?>


Literal Examples
****************
+ Addition is not supported on type array
+ Multiplication is not supported on type object

Solutions
_________

+ Check that the array only contains numbers.
