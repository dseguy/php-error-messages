.. _implicit-conversion-from-float-%.*h-to-int-loses-precision:

Implicit conversion from float %.*H to int loses precision
----------------------------------------------------------
 
.. meta::
	:description:
		Implicit conversion from float %.*H to int loses precision: This warning is emitted when a float is passed to a typed value that requires an integer.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Implicit conversion from float %.*H to int loses precision
	:og:description: This warning is emitted when a float is passed to a typed value that requires an integer
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/implicit-conversion-from-float-%25.%2Ah-to-int-loses-precision.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Implicit conversion from float %.*H to int loses precision
	:twitter:description: Implicit conversion from float %.*H to int loses precision: This warning is emitted when a float is passed to a typed value that requires an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-%.*h-to-int-loses-precision.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-%.*h-to-int-loses-precision.html","name":"Implicit conversion from float %.*H to int loses precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"This warning is emitted when a float is passed to a typed value that requires an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/implicit-conversion-from-float-%.*h-to-int-loses-precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This warning is emitted when a float is passed to a typed value that requires an integer. The float is truncated, not rounded, to an integer, and passed. 

This becomes a Fatal error when strict_types is actived.

The float might be a valid integer, when it has no decimal part: then, no error is emitted.

Example
_______

.. code-block:: php

   <?php
   
   function foo(int $a): int {
       // At return time
       return $a - 0.5;
   }
   
   // At call time
   foo(1.1);
   
   ?>


Literal Examples
****************
+ Implicit conversion from float 1.1 to int loses precision
+ Implicit conversion from float 0.5 to int loses precision

Solutions
_________

+ Cast the float to integer before using it with a typed resource.
+ Round the float to integer before using it with a typed resource.

Related Error Messages
______________________

+ :ref:`the-float-%.*h-is-not-representable-as-an-int,-cast-occurred`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `implicitConversionToInt <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitConversionToInt.html>`_.
