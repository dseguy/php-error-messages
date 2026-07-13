.. _unexpected-nan-value-was-coerced-to-%s:

unexpected NAN value was coerced to %s
--------------------------------------
 
.. meta::
	:description:
		unexpected NAN value was coerced to %s: When a ``NAN`` (Not a Number) float value is coerced to another type such as ``int`` or ``string``, PHP emits this warning.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: unexpected NAN value was coerced to %s
	:og:description: When a ``NAN`` (Not a Number) float value is coerced to another type such as ``int`` or ``string``, PHP emits this warning
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unexpected-nan-value-was-coerced-to-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unexpected NAN value was coerced to %s
	:twitter:description: unexpected NAN value was coerced to %s: When a ``NAN`` (Not a Number) float value is coerced to another type such as ``int`` or ``string``, PHP emits this warning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unexpected-nan-value-was-coerced-to-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unexpected-nan-value-was-coerced-to-%s.html","name":"unexpected NAN value was coerced to %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 17:40:55 +0000","dateModified":"Mon, 13 Jul 2026 17:40:55 +0000","description":"When a ``NAN`` (Not a Number) float value is coerced to another type such as ``int`` or ``string``, PHP emits this warning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unexpected-nan-value-was-coerced-to-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a ``NAN`` (Not a Number) float value is coerced to another type such as ``int`` or ``string``, PHP emits this warning. ``NAN`` is a special float value that represents an undefined or unrepresentable result of a floating-point operation.

Coercing ``NAN`` to ``int`` produces ``0``, and coercing it to ``string`` produces an empty string. These results are misleading since ``NAN`` is not equivalent to zero or empty. The warning alerts developers that a ``NAN`` value is silently converted, which is almost certainly unintended.

``NAN`` is produced by operations like ``acos(8)``, ``log(-1)``, ``sqrt(-1)``, or ``0.0/0.0``.

Example
_______

.. code-block:: php

   <?php
   
   // NAN coerced to int
   $a = (int) NAN;
   // $a = 0
   
   // NAN coerced to string
   $b = (string) NAN;
   // $b = "" 
   
   // NAN passed to an integer parameter
   function foo(int $x) {} 
   foo(NAN);
   
   ?>


Literal Examples
****************
+ unexpected NAN value was coerced to int
+ unexpected NAN value was coerced to string

Solutions
_________

+ Check for ``is_nan()`` before coercing or passing the value to a typed parameter.
+ Handle ``NAN`` explicitly at its source by validating the result of math operations.
+ Use ``is_finite()`` to filter out both ``NAN`` and ``INF`` before using a float value.

Related Error Messages
______________________

+ :ref:`must-be-a-finite-value`
+ :ref:`a-non-numeric-value-encountered`

See Also
________

+ `float <https://www.php.net/manual/en/language.types.float.php>`_
+ `is_nan <https://www.php.net/manual/en/function.is-nan.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
