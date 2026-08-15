.. _use-of-mbstring.http_input-is-deprecated:

Use of mbstring.http_input is deprecated
----------------------------------------
 
.. meta::
	:description:
		Use of mbstring.http_input is deprecated: ``mbstring.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Use of mbstring.http_input is deprecated
	:og:description: ``mbstring
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/use-of-mbstring.http_input-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use of mbstring.http_input is deprecated
	:twitter:description: Use of mbstring.http_input is deprecated: ``mbstring
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/use-of-mbstring.http_input-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/use-of-mbstring.http_input-is-deprecated.html","name":"Use of mbstring.http_input is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:16 +0000","dateModified":"Tue, 11 Aug 2026 20:56:16 +0000","description":"``mbstring","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/use-of-mbstring.http_input-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``mbstring.http_input`` used to tell the mbstring extension which encoding(s) to assume for incoming HTTP request data, so it could transparently convert it (in combination with ``mbstring.encoding_translation``).

This mechanism predates, and overlaps with, the language-level ``input_encoding`` directive, and having two separate configuration surfaces for the same concern is a frequent source of confusion. ``mbstring.http_input`` has been deprecated since PHP 5.6.0, though the deprecation notice is only emitted when the directive is actually set.

Example
_______

.. code-block:: php

   <?php
   
   ini_set('mbstring.http_input', 'UTF-8');
   
   ?>

Solutions
_________

+ Use the ``input_encoding`` INI directive instead of ``mbstring.http_input``.

Related Error Messages
______________________

+ :ref:`use-of-mbstring.http_output-is-deprecated`
+ :ref:`use-of-mbstring.internal_encoding-is-deprecated`


In more recent PHP versions, this error message is now :ref:`use-of-mbstring.http_output-is-deprecated`.
