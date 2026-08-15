.. _handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead:

Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead
-------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead: Since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/handling-qprint-via-mbstring-is-deprecated%3B-use-quoted_printable_encode-quoted_printable_decode-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead
	:twitter:description: Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead.html","name":"Handling QPrint via mbstring is deprecated; use quoted_printable_encode\/quoted_printable_decode instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:05 +0000","dateModified":"Tue, 11 Aug 2026 20:55:05 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.2, several pseudo-encodings were dropped from mbstring, including ``qprint`` (Quoted-Printable), a text encoding that represents non-ASCII bytes using ``=XX`` sequences.

This functionality overlapped with the dedicated ``quoted_printable_encode()``/``quoted_printable_decode()`` functions provided by the standard extension. It remains usable until PHP 9, when it will be removed entirely.

Example
_______

.. code-block:: php

   <?php
   
   mb_convert_encoding('foo', 'qprint');
   
   ?>

Solutions
_________

+ Use ``quoted_printable_encode()`` and ``quoted_printable_decode()`` instead of ``mb_convert_encoding()`` with the ``qprint`` encoding.

Related Error Messages
______________________

+ :ref:`handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity-instead`
+ :ref:`handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead`
+ :ref:`handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `mb_convert_encoding <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mb_convert_encoding.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Structures/DeprecatedMbEncoding <https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/DeprecatedMbEncoding.html>`_.
