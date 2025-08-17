.. _implicit-conversion-from-float-string-"%s"-to-int-loses-precision:

Implicit conversion from float-string "%s" to int loses precision
-----------------------------------------------------------------
 
.. meta::
	:description:
		Implicit conversion from float-string "%s" to int loses precision: Bitshift operators and bitwise operators work on integers, not on floats.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Implicit conversion from float-string &quot;%s&quot; to int loses precision
	:og:description: Bitshift operators and bitwise operators work on integers, not on floats
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/implicit-conversion-from-float-string-%22%25s%22-to-int-loses-precision.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicit conversion from float-string "%s" to int loses precision
	:twitter:description: Implicit conversion from float-string "%s" to int loses precision: Bitshift operators and bitwise operators work on integers, not on floats
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-string-\"%s\"-to-int-loses-precision.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-string-\"%s\"-to-int-loses-precision.html","name":"Implicit conversion from float-string \"%s\" to int loses precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 17 Aug 2025 14:27:20 +0000","dateModified":"Sun, 17 Aug 2025 14:27:20 +0000","description":"Bitshift operators and bitwise operators work on integers, not on floats","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-string-\"%s\"-to-int-loses-precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Bitshift operators and bitwise operators work on integers, not on floats. When a string is provided, it may be converted to integer or float: in the second case, the deprecation warning is emitted.

The warning is not emitted when the conversion lands on an integer.

Example
_______

.. code-block:: php

   <?php
   
   // Extract from php-src/Zend/tests/float_to_int/warnings_string_float_literals.phpt
   $var = '1.5'|3;
   $var = '1.5'&3;
   $var = '1.5'^3;
   $var = '1.5' << 3;
   $var = '1.5' >> 3;
   $var = 3 << '1.5';
   $var = 3 >> '1.5';
   
   //OK : PHP is smart enough to round this to integer
   ((1 / 35) * 35) | 3;
   
   //Implicit conversion from float 0.9999999999999999 to int loses precision 
   //The rounding is not sufficient 
   ((1 / 35) * 7 * 5 ) | 3;
   
   // valid, conversion gives an integer
   $var = '14.00000000'|3;
   
   // still valid, conversion does not handle 0.0000000000000001 precision
   $var = '13.0000000000000001'|3;
   
   ?>


Literal Examples
****************
+ Implicit conversion from float-string "1.5" to int loses precision
+ Implicit conversion from float-string "0.9999999999999999" to int loses precision

Solutions
_________

+ Cast the string to integer before using it with bitshift or bitwise operators.
+ Round the string to integer before using it with bitshift or bitwise operators.
+ Simplify the expressions before using it with bitshift or bitwise operators.
