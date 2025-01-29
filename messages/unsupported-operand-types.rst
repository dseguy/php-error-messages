.. _unsupported-operand-types:

Unsupported operand types
-------------------------
 
.. meta::
	:description:
		Unsupported operand types: This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unsupported operand types
	:og:description: This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unsupported-operand-types.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unsupported operand types
	:twitter:description: Unsupported operand types: This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unsupported-operand-types.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unsupported-operand-types.html","name":"Unsupported operand types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 29 Jan 2025 10:22:42 +0000","dateModified":"Wed, 29 Jan 2025 10:22:42 +0000","description":"This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unsupported-operand-types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator. 

In the code example, the string 'a4.4a' cannot be converted to an integer or a float. This yield the error. 

PHP could do with '4.4a' (cast to 4.4 and a warning), or with '4.4' (cast to a float silently). 

On the other hand, the 'a4.4a' string cannot be converted to a numeric and it yields the error. Other types, such as an array, an object or a resource would yield the same error. Boolean and null are converted to integers.

This error applies to all operators, with matching constraints. 

Conversion to string my be automatically happening, when the strict_typing is not active. 

The error is reported for the first or the second argument. It may also applies to both, though PHP stops at the first one it finds.

Example
_______

.. code-block:: php

   <?php
   
   echo a4.4a ** 4;
   
   ?>

Solutions
_________

+ Use an explicit cast to ensure the correct type of the operand.
+ Check the value before using it with the operator.

Related Error Messages
______________________

+ :ref:`a-non-numeric-value-encountered`
+ :ref:`cannot-perform-bitwise-not-on-%s`
+ :ref:`a-non-well-formed-numeric-value-encountered`
