.. _the-float-string--"%s-"-is-not-representable-as-an-int,-cast-occurred:

The float-string "%s" is not representable as an int, cast occurred
-------------------------------------------------------------------
 
.. meta::
	:description:
		The float-string "%s" is not representable as an int, cast occurred: The string contains a numeric value, that could be parsed, even partially.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The float-string &quot;%s&quot; is not representable as an int, cast occurred
	:og:description: The string contains a numeric value, that could be parsed, even partially
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-float-string--%22%25s-%22-is-not-representable-as-an-int%2C-cast-occurred.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The float-string "%s" is not representable as an int, cast occurred
	:twitter:description: The float-string "%s" is not representable as an int, cast occurred: The string contains a numeric value, that could be parsed, even partially
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-float-string--\"%s-\"-is-not-representable-as-an-int,-cast-occurred.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-float-string--\"%s-\"-is-not-representable-as-an-int,-cast-occurred.html","name":"The float-string \"%s\" is not representable as an int, cast occurred","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Nov 2025 21:12:22 +0000","dateModified":"Sun, 23 Nov 2025 21:12:22 +0000","description":"The string contains a numeric value, that could be parsed, even partially","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-float-string--\"%s-\"-is-not-representable-as-an-int,-cast-occurred.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The string contains a numeric value, that could be parsed, even partially. Yet, the resulting number is bigger than the larger supported integer ``PHP_INT_MAX``. At that point, PHP replace the parse numeric value to the maximum integer value. 

The problem does not happen with float numbers, which are converted to ``INF`` infinity when they can't be represented anymore.

This problem is often related to the presence of the ``e`` character in the string, which yield a possible float number.

Example
_______

.. code-block:: php

   <?php
   
   var_dump((int) 9E82);
   //9223372036854775807
   
   var_dump((float) 9E82);
   //float(9.0E+82)
   
   ?>


Literal Examples
****************
+ The float-string "9E82" is not representable as an int, cast occurred

Solutions
_________

+ Use the string, rather than convert it to an integer.
+ Check if the string can be converted before using the cast.
+ Compare the resulting value with ``PHP_INT_MAX``: it might be very far from the expected conversion.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
