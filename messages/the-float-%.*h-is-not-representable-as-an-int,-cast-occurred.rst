.. _the-float-%.*h-is-not-representable-as-an-int,-cast-occurred:

The float %.*H is not representable as an int, cast occurred
------------------------------------------------------------
 
.. meta::
	:description:
		The float %.*H is not representable as an int, cast occurred: When a ``float`` is cast to ``int`` -- explicitly with ``(int)``/``intval()``, or implicitly wherever an integer is required, such as an array offset or a bitwise operator -- and the value is outside the range representable by ``PHP_INT_MIN``/``PHP_INT_MAX``, or is ``NAN`` or ``INF``, PHP cannot produce a meaningful integer.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The float %.*H is not representable as an int, cast occurred
	:og:description: When a ``float`` is cast to ``int`` -- explicitly with ``(int)``/``intval()``, or implicitly wherever an integer is required, such as an array offset or a bitwise operator -- and the value is outside the range representable by ``PHP_INT_MIN``/``PHP_INT_MAX``, or is ``NAN`` or ``INF``, PHP cannot produce a meaningful integer
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-float-%25.%2Ah-is-not-representable-as-an-int%2C-cast-occurred.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The float %.*H is not representable as an int, cast occurred
	:twitter:description: The float %.*H is not representable as an int, cast occurred: When a ``float`` is cast to ``int`` -- explicitly with ``(int)``/``intval()``, or implicitly wherever an integer is required, such as an array offset or a bitwise operator -- and the value is outside the range representable by ``PHP_INT_MIN``/``PHP_INT_MAX``, or is ``NAN`` or ``INF``, PHP cannot produce a meaningful integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-float-%.*h-is-not-representable-as-an-int,-cast-occurred.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-float-%.*h-is-not-representable-as-an-int,-cast-occurred.html","name":"The float %.*H is not representable as an int, cast occurred","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:23:30 +0000","dateModified":"Sat, 25 Jul 2026 12:23:30 +0000","description":"When a ``float`` is cast to ``int`` -- explicitly with ``(int)``\/``intval()``, or implicitly wherever an integer is required, such as an array offset or a bitwise operator -- and the value is outside the range representable by ``PHP_INT_MIN``\/``PHP_INT_MAX``, or is ``NAN`` or ``INF``, PHP cannot produce a meaningful integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-float-%.*h-is-not-representable-as-an-int,-cast-occurred.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a ``float`` is cast to ``int`` -- explicitly with ``(int)``/``intval()``, or implicitly wherever an integer is required, such as an array offset or a bitwise operator -- and the value is outside the range representable by ``PHP_INT_MIN``/``PHP_INT_MAX``, or is ``NAN`` or ``INF``, PHP cannot produce a meaningful integer.

Rather than silently returning an arbitrary or platform-dependent bit pattern, PHP emits this warning and returns ``0`` for ``NAN``/``INF``, or a value obtained by taking the float modulo the 64-bit integer range for very large finite values -- in both cases, a value with no reliable relationship to the original float.

Example
_______

.. code-block:: php

   <?php
   
   var_dump((int) 1.0E+20);
   // int(0) on 64-bit, and the value bears no relation to 1.0E+20
   
   var_dump((int) NAN);
   // int(0)
   
   var_dump((int) INF);
   // int(0)
   
   ?>


Literal Examples
****************
+ The float 1.0E+20 is not representable as an int, cast occurred
+ The float NAN is not representable as an int, cast occurred
+ The float INF is not representable as an int, cast occurred

Solutions
_________

+ Check the float against ``PHP_INT_MIN``/``PHP_INT_MAX`` (and against ``is_nan()``/``is_infinite()``) before casting it.
+ Keep the value as a ``float`` or as a string if it may exceed the integer range.
+ Use ``BCMath`` or ``GMP`` if arbitrary-precision integers are required.

Related Error Messages
______________________

+ :ref:`the-float-string--"%s-"-is-not-representable-as-an-int,-cast-occurred`
+ :ref:`implicit-conversion-from-float-%.*h-to-int-loses-precision`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
