.. _handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead:

Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead
-----------------------------------------------------------------------------------
 
	.. meta::
		:description:
			Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead: Since PHP 8.

	    :og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead
		:og:description: Since PHP 8
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/handling-base64-via-mbstring-is-deprecated%3B-use-base64_encode-base64_decode-instead.html
	    :og:locale: en

	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead
	:twitter:description: Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
Description
___________
 
Since PHP 8.2, several encodings were dropped from mbstring, including ``base64``. 

This is a deprecation, so the feature is available until PHP 9.


Example
_______

.. code-block:: php

   <?php
   
   mb_convert_encoding('foo', 'base64');
   
   ?>

Solutions
_________

+ It is recommended to use the ``base64_encode()`` and ``base64_decode()`` functions to do this.

Related Error Messages
______________________

+ :ref:`handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity`
+ :ref:`handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode`
+ :ref:`handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead`


In previous PHP versions, this error message used to be :ref:`no-previous-error`.
