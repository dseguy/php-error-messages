.. _array-to-string-conversion:

Array to string conversion
--------------------------
 
.. meta::
	:description:
		Array to string conversion: This error appears when an array is converted into a string, without a proper type cast.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Array to string conversion
	:og:description: This error appears when an array is converted into a string, without a proper type cast
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/array-to-string-conversion.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array to string conversion
	:twitter:description: Array to string conversion: This error appears when an array is converted into a string, without a proper type cast
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-to-string-conversion.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/array-to-string-conversion.html","name":"Array to string conversion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error appears when an array is converted into a string, without a proper type cast","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/array-to-string-conversion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error appears when an array is converted into a string, without a proper type cast. For example, in the illustration code, the array is directly used with ``echo``, which requires a string, as argument. The result of this expression is ``Array``.

This error may be a sub-part of other operations, that also requires strings. This is the second example, with ``implode()`` : the source of the error lies in the elements of the array. They are supposed to be strings, so as to be concatenated with the separator; but one of them is also an array, leading to the error.

This error is not affected by ``strict_types``: it is always emits the same error.

Example
_______

.. code-block:: php

   <?php
   
   echo ['a'];
   
   echo implode(',', [1, 2, ['c']]);
   
   ?>

Solutions
_________

+ Convert the array to a string first.
+ Extract one (or more) entries from the array, as long as they are strings.
+ Force the array to a string with cast (although it will produce the ``Array`` string).
+ Use a method that accept strings and arrays.

See Also
________

+ `HowtoFixthePHPWarningArraytostringconversionerrorinPHP <https://www.sourcecodester.com/article/16555/how-fix-php-warning-array-string-conversion-error-php.html>`_
