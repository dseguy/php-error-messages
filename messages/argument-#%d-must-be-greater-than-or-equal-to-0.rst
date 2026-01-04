.. _argument-#%d-must-be-greater-than-or-equal-to-0:

Argument #%d must be greater than or equal to 0
-----------------------------------------------
 
.. meta::
	:description:
		Argument #%d must be greater than or equal to 0: This error is reported when a parameter is expected to be an integer, positive or zero.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Argument #%d must be greater than or equal to 0
	:og:description: This error is reported when a parameter is expected to be an integer, positive or zero
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-must-be-greater-than-or-equal-to-0.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Argument #%d must be greater than or equal to 0
	:twitter:description: Argument #%d must be greater than or equal to 0: This error is reported when a parameter is expected to be an integer, positive or zero
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#%d-must-be-greater-than-or-equal-to-0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/argument-#%d-must-be-greater-than-or-equal-to-0.html","name":"Argument #%d must be greater than or equal to 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 04 Jan 2026 21:20:40 +0000","dateModified":"Sun, 04 Jan 2026 21:20:40 +0000","description":"This error is reported when a parameter is expected to be an integer, positive or zero","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/argument-#%d-must-be-greater-than-or-equal-to-0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is reported when a parameter is expected to be an integer, positive or zero. This is the case with the second argument of str_repeat().

Example
_______

.. code-block:: php

   <?php
     str_repeat('abc', -1);
   
       // This is valid, and returns an empty string
     str_repeat('abc', 0);
   ?>


Literal Examples
****************
+ str_repeat(): Argument #2 ($times) must be greater than or equal to 0

Solutions
_________

+ Make sure the second argument is an integer, greater or equal to zero.
+ Use intval() on the value of the second integer.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
