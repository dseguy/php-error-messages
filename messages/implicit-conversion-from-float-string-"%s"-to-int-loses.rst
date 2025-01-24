.. _implicit-conversion-from-float-string-"%s"-to-int-loses:

Implicit conversion from float-string "%s" to int loses
-------------------------------------------------------
 
.. meta::
	:description:
		Implicit conversion from float-string "%s" to int loses: In cases where integers are required, PHP applies a type cast and convert floats and strings into integers.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Implicit conversion from float-string &quot;%s&quot; to int loses
	:og:description: In cases where integers are required, PHP applies a type cast and convert floats and strings into integers
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/implicit-conversion-from-float-string-%22%25s%22-to-int-loses.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicit conversion from float-string "%s" to int loses
	:twitter:description: Implicit conversion from float-string "%s" to int loses: In cases where integers are required, PHP applies a type cast and convert floats and strings into integers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-string-\"%s\"-to-int-loses.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-string-\"%s\"-to-int-loses.html","name":"Implicit conversion from float-string \"%s\" to int loses","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 22 Jan 2025 11:11:25 +0000","dateModified":"Wed, 04 Dec 2024 18:01:34 +0000","description":"In cases where integers are required, PHP applies a type cast and convert floats and strings into integers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-string-\"%s\"-to-int-loses.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
In cases where integers are required, PHP applies a type cast and convert floats and strings into integers. In many cases, that conversion is eponymous, with 1.0 (float) or '10' being obviously converted to their integer equivalent. 

When the conversion is not flawless, in particular when there is a significant decimal part in the float number, this conversion is deleting a part of the value. This message is meant to raise awareness about it. 

Situations where this may happens are varied : index in arrays or strings, operators that works on integers, such as bitshift; logical and bitwise operators, etc.

This is a variation of the error 'A non-numeric value encountered', where the value could not be converted sanely to an integer.


Example
_______

.. code-block:: php

   <?php
   
   $a = ['1.23' => 3];
   
   ?>


Literal Examples
****************
+ Implicit conversion from float-string "1.23" to int loses

Solutions
_________

+ Explicitly cast the value to integer.
+ Check if the value is an integer before usage.

Related Error Messages
______________________

+ :ref:`a-non-numeric-value-encountered`
