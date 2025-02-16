.. _handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead:

Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead
-------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead: Since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/handling-uuencode-via-mbstring-is-deprecated%3B-use-convert_uuencode-convert_uudecode-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead
	:twitter:description: Handling Uuencode via mbstring is deprecated; use convert_uuencode/convert_uudecode instead: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead.html","name":"Handling Uuencode via mbstring is deprecated; use convert_uuencode\/convert_uudecode instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.2, several encodings were dropped from mbstring, including ``uuencode``. 

This is a deprecation, so the feature is available until PHP 9.

Example
_______

.. code-block:: php

   <?php
   
   mb_convert_encoding('foo', 'uuencode');
   
   ?>

Solutions
_________

+ It is recommended to use the ``convert_uuencode()`` and ``convert_uudecode()`` functions to do this.

Related Error Messages
______________________

+ :ref:`handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead`
+ :ref:`handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity`
+ :ref:`handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode`
