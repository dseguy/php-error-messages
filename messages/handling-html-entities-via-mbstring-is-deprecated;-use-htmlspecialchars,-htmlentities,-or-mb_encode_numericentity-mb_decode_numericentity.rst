.. _handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity:

Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity
-----------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity: Since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/handling-html-entities-via-mbstring-is-deprecated%3B-use-htmlspecialchars%2C-htmlentities%2C-or-mb_encode_numericentity-mb_decode_numericentity.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity
	:twitter:description: Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
Since PHP 8.2, several encodings were dropped from mbstring, including ``html``. 

This is a deprecation, so the feature is available until PHP 9.


Example
_______

.. code-block:: php

   <?php
   
   mb_convert_encoding('foo', 'html');
   
   ?>

Solutions
_________

+ It is recommended to use the ``htmlspecialchars()``, ``htmlentities()``, ``mb_encode_numericentity()``, ``mb_decode_numericentity()`` functions to do this.

Related Error Messages
______________________

+ :ref:`handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead`
+ :ref:`handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode`
+ :ref:`handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead`


In previous PHP versions, this error message used to be :ref:`no-previous-error`.
