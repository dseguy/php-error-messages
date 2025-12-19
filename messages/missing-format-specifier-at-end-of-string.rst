.. _missing-format-specifier-at-end-of-string:

Missing format specifier at end of string
-----------------------------------------
 
.. meta::
	:description:
		Missing format specifier at end of string: This error is related to the parsing of the format string.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Missing format specifier at end of string
	:og:description: This error is related to the parsing of the format string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/missing-format-specifier-at-end-of-string.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Missing format specifier at end of string
	:twitter:description: Missing format specifier at end of string: This error is related to the parsing of the format string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/missing-format-specifier-at-end-of-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/missing-format-specifier-at-end-of-string.html","name":"Missing format specifier at end of string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Dec 2025 06:00:48 +0000","dateModified":"Fri, 19 Dec 2025 06:00:48 +0000","description":"This error is related to the parsing of the format string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/missing-format-specifier-at-end-of-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is related to the parsing of the format string. In the first example, PHP finds two ``%`` characters, and expect each time to be followed by a format character. When the ``%`` is at the end of the string, there is no more character to parse, hence the error message. 

Also, note the second illustration, which uses a dot ``.`` after the ``%``. This is a padding character, so the parser set it aside, and then, look for the format character itself, while reaching the end of the line.

This error applies to printf(), sprintf(), vprintf(), vsprintf().

Example
_______

.. code-block:: php

   <?php
   
       printf('%s %', 'a', 'b');
       printf('%s %.', 'a', 'b');
   
   ?>

Solutions
_________

+ Add the missing format character at the end of the line.
+ Remove the final % char in the format line.
+ Add another % at the end of the line, to make it a literal % char in the format.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
