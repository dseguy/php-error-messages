.. _needle-is-not-a-string-or-an-integer:

needle is not a string or an integer
------------------------------------
 
.. meta::
	:description:
		needle is not a string or an integer: The second argument may be a string, or an integer, which will be used as a string.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: needle is not a string or an integer
	:og:description: The second argument may be a string, or an integer, which will be used as a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/needle-is-not-a-string-or-an-integer.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: needle is not a string or an integer
	:twitter:description: needle is not a string or an integer: The second argument may be a string, or an integer, which will be used as a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/needle-is-not-a-string-or-an-integer.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/needle-is-not-a-string-or-an-integer.html","name":"needle is not a string or an integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Dec 2024 17:06:23 +0000","dateModified":"Fri, 27 Dec 2024 17:06:23 +0000","description":"The second argument may be a string, or an integer, which will be used as a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/needle-is-not-a-string-or-an-integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The second argument may be a string, or an integer, which will be used as a string. Any other type is forbidden, in particular array. Other types may yield other error messages, such as a type error.

Example
_______

.. code-block:: php

   <?php
   
   print strpos('abc99', []);
   
   ?>

Solutions
_________

+ Use a foreach on an array of strings, and use these values instead.
+ Pick up a value in the array.

Related Error Messages
______________________

+ :ref:`non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior`
