.. _use-of-warnings-for-sqlite3-is-deprecated:

Use of warnings for SQLite3 is deprecated
-----------------------------------------
 
.. meta::
	:description:
		Use of warnings for SQLite3 is deprecated: The SQLite3 extension historically reported errors (such as a failed query) by emitting an ``E_WARNING`` and returning ``false``, which is inconsistent with the exception-based error handling used elsewhere in PHP, and requires manual checking of every return value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Use of warnings for SQLite3 is deprecated
	:og:description: The SQLite3 extension historically reported errors (such as a failed query) by emitting an ``E_WARNING`` and returning ``false``, which is inconsistent with the exception-based error handling used elsewhere in PHP, and requires manual checking of every return value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/use-of-warnings-for-sqlite3-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use of warnings for SQLite3 is deprecated
	:twitter:description: Use of warnings for SQLite3 is deprecated: The SQLite3 extension historically reported errors (such as a failed query) by emitting an ``E_WARNING`` and returning ``false``, which is inconsistent with the exception-based error handling used elsewhere in PHP, and requires manual checking of every return value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/use-of-warnings-for-sqlite3-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/use-of-warnings-for-sqlite3-is-deprecated.html","name":"Use of warnings for SQLite3 is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:34 +0000","dateModified":"Tue, 11 Aug 2026 20:56:34 +0000","description":"The SQLite3 extension historically reported errors (such as a failed query) by emitting an ``E_WARNING`` and returning ``false``, which is inconsistent with the exception-based error handling used elsewhere in PHP, and requires manual checking of every return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/use-of-warnings-for-sqlite3-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The SQLite3 extension historically reported errors (such as a failed query) by emitting an ``E_WARNING`` and returning ``false``, which is inconsistent with the exception-based error handling used elsewhere in PHP, and requires manual checking of every return value. ``SQLite3::enableExceptions(true)`` switches to throwing ``SQLite3Exception`` instead, and has been available for a long time as an opt-in.

As of PHP 8.3.0, the legacy warning-based mode is deprecated: calling ``SQLite3::enableExceptions()`` with ``false`` (or not calling it at all, since ``false`` is the default) raises a deprecation notice.

Example
_______

.. code-block:: php

   <?php
   
   $db = new SQLite3(':memory:');
   
   // Explicitly keeps the legacy, warning-based error mode.
   $db->enableExceptions(false);
   
   ?>

Solutions
_________

+ Call ``$db->enableExceptions(true)`` right after opening the connection, and handle ``SQLite3Exception`` instead of checking return values for ``false``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `SQLite3::enableExceptions <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/SQLite3::enableExceptions.html>`_.
