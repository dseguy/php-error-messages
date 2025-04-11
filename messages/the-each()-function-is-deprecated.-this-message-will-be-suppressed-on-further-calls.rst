.. _the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls:

The each() function is deprecated. This message will be suppressed on further calls
-----------------------------------------------------------------------------------
 
.. meta::
	:description:
		The each() function is deprecated. This message will be suppressed on further calls: The function ``each`` was deprecated in PHP 7.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The each() function is deprecated. This message will be suppressed on further calls
	:og:description: The function ``each`` was deprecated in PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-each%28%29-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The each() function is deprecated. This message will be suppressed on further calls
	:twitter:description: The each() function is deprecated. This message will be suppressed on further calls: The function ``each`` was deprecated in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html","name":"The each() function is deprecated. This message will be suppressed on further calls","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The function ``each`` was deprecated in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The function ``each`` was deprecated in PHP 7.x and removed in PHP 8.0. It was mainly used in loops like the above, and could be replaced advantageously with a ``foreach`` structure.

Example
_______

.. code-block:: php

   <?php
   
   $array = ['a', 'b'];
   while(list($key, $value) = each($array)) {
       print "$key => $value\n";
   }
   
   ?>

Solutions
_________

+ Replace the while loop with a foreach one.
+ Replace the loop with a call to one of the array function.
+ Traverse the array with a ``yield`` or ``yield from`` call.
+ Use an ``iterator`` to traverse the array.


In more recent PHP versions, this error message is now :ref:`call-to-undefined-function-each()`.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/Php72RemovedFunctions <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/Php72RemovedFunctions.html>`_.
