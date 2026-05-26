.. _providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord(\$str[0])-instead:

Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead
------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead: The ``ord()`` function returns the ordinal value of the first byte of a string.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead
	:og:description: The ``ord()`` function returns the ordinal value of the first byte of a string
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord%28%24str%5B0%5D%29-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead
	:twitter:description: Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead: The ``ord()`` function returns the ordinal value of the first byte of a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord($str[0])-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord($str[0])-instead.html","name":"Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 10:27:28 +0000","dateModified":"Tue, 26 May 2026 10:27:28 +0000","description":"The ``ord()`` function returns the ordinal value of the first byte of a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord($str[0])-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``ord()`` function returns the ordinal value of the first byte of a string. When the provided string is longer than one byte, only the first byte is used and the remaining bytes are silently discarded. This implicit behavior is a source of confusion, especially when working with multi-byte encodings such as UTF-8, where a single character may span several bytes. To make the intent explicit, use the ``$str[0]`` syntax to extract the first byte before passing it to ``ord()``.

Example
_______

.. code-block:: php

   <?php
   
       $str = '我';
       
       echo ord($str); 
   
   ?>

Solutions
_________

+ Use the ``$str[0]`` rather than the whole string.
+ Use ``substr($str, 0, 1)`` on the string, as long as the string is not multi-byte.

Related Error Messages
______________________

+ :ref:`providing-an-empty-string-is-deprecated`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
