.. _handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode:

Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode
-----------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode: Since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/handling-qprint-via-mbstring-is-deprecated%3B-use-quoted_printable_encode-quoted_printable_decode.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode
	:twitter:description: Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html","name":"Handling QPrint via mbstring is deprecated; use quoted_printable_encode\/quoted_printable_decode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.2, several encodings were dropped from mbstring, including ``QPrint``. 

This is a deprecation, so the feature is available until PHP 9.

Example
_______

.. code-block:: php

   <?php
   
   mb_convert_encoding('foo', 'qprint');
   
   ?>

Solutions
_________

+ It is recommended to use the ``quoted_printable_encode()`` and ``quoted_printable_decode()`` functions to do this.

Related Error Messages
______________________

+ :ref:`handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead`
+ :ref:`handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity`
+ :ref:`handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead`
