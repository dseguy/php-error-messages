.. _the-\$context-parameter-has-no-effect-for-finfo_buffer():

The $context parameter has no effect for finfo_buffer()
-------------------------------------------------------
 
.. meta::
	:description:
		The $context parameter has no effect for finfo_buffer(): ``finfo_buffer()`` (and ``finfo::buffer()``) accept an optional ``$context`` parameter, mirroring the signature of stream-related functions.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The $context parameter has no effect for finfo_buffer()
	:og:description: ``finfo_buffer()`` (and ``finfo::buffer()``) accept an optional ``$context`` parameter, mirroring the signature of stream-related functions
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%24context-parameter-has-no-effect-for-finfo_buffer%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The $context parameter has no effect for finfo_buffer()
	:twitter:description: The $context parameter has no effect for finfo_buffer(): ``finfo_buffer()`` (and ``finfo::buffer()``) accept an optional ``$context`` parameter, mirroring the signature of stream-related functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-$context-parameter-has-no-effect-for-finfo_buffer().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-$context-parameter-has-no-effect-for-finfo_buffer().html","name":"The $context parameter has no effect for finfo_buffer()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:53 +0000","dateModified":"Tue, 11 Aug 2026 20:55:53 +0000","description":"``finfo_buffer()`` (and ``finfo::buffer()``) accept an optional ``$context`` parameter, mirroring the signature of stream-related functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-$context-parameter-has-no-effect-for-finfo_buffer().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``finfo_buffer()`` (and ``finfo::buffer()``) accept an optional ``$context`` parameter, mirroring the signature of stream-related functions. Unlike ``finfo_file()``, which does use a stream context to open the file it inspects, ``finfo_buffer()`` operates directly on an in-memory string and never opens a stream, so the ``$context`` argument has never had any effect.

As of PHP 8.5.0, passing a value for ``$context`` raises a deprecation notice to reflect that fact.

Example
_______

.. code-block:: php

   <?php
   
   $finfo = new finfo(FILEINFO_MIME_TYPE);
   $context = stream_context_create();
   
   echo $finfo->buffer('some data', FILEINFO_NONE, $context);
   
   ?>

Solutions
_________

+ Stop passing a ``$context`` argument to ``finfo_buffer()``/``finfo::buffer()``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `finfo_buffer <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finfo_buffer.html>`_.
