.. _open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s):

open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s)
------------------------------------------------------------------------------------
 
.. meta::
	:description:
		open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s): This is an alt error message raised when a PHP extension tries to access a file, while the ``open_basedir`` is enabled.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s)
	:og:description: This is an alt error message raised when a PHP extension tries to access a file, while the ``open_basedir`` is enabled
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/open_basedir-restriction-in-effect.-file%28%25s%29-is-not-within-the-allowed-path%28s%29%3A-%28%25s%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s)
	:twitter:description: open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s): This is an alt error message raised when a PHP extension tries to access a file, while the ``open_basedir`` is enabled
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s).html","name":"open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 21 Feb 2026 17:16:17 +0000","dateModified":"Sat, 21 Feb 2026 17:16:17 +0000","description":"This is an alt error message raised when a PHP extension tries to access a file, while the ``open_basedir`` is enabled","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This is an alt error message raised when a PHP extension tries to access a file, while the ``open_basedir`` is enabled. This may happen with XML extensions, ``sqlite3``, ``file``, ``tidy``, ``mysqli``, ``readline``, ``stream``, ``curl``, etc. This list is not exhaustive.

Example
_______

.. code-block:: php

   


Literal Examples
****************
+ open_basedir restriction in effect. File(example.php) is not within the allowed path(s): (.::/tmp/)

Solutions
_________

+ Make sure the file path lies within the ``open_basedir`` directive's path.
+ Change the value of the ``open_basedir`` directive.
+ Check the value of the ``open_basedir`` directive for typos.

Related Error Messages
______________________

+ :ref:`open_basedir-prohibits-opening-%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
