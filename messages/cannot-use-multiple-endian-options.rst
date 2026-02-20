.. _cannot-use-multiple-endian-options:

cannot use multiple endian options
----------------------------------
 
.. meta::
	:description:
		cannot use multiple endian options: The third option of ``gmp_import()`` must be either ``GMP_BIG_ENDIAN``, ``GMP_NATIVE_ENDIAN`` or ``GMP_LITTLE_ENDIAN``, but not at the same time.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot use multiple endian options
	:og:description: The third option of ``gmp_import()`` must be either ``GMP_BIG_ENDIAN``, ``GMP_NATIVE_ENDIAN`` or ``GMP_LITTLE_ENDIAN``, but not at the same time
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-multiple-endian-options.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot use multiple endian options
	:twitter:description: cannot use multiple endian options: The third option of ``gmp_import()`` must be either ``GMP_BIG_ENDIAN``, ``GMP_NATIVE_ENDIAN`` or ``GMP_LITTLE_ENDIAN``, but not at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-multiple-endian-options.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-multiple-endian-options.html","name":"cannot use multiple endian options","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 09:22:09 +0000","dateModified":"Thu, 05 Feb 2026 09:22:09 +0000","description":"The third option of ``gmp_import()`` must be either ``GMP_BIG_ENDIAN``, ``GMP_NATIVE_ENDIAN`` or ``GMP_LITTLE_ENDIAN``, but not at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-multiple-endian-options.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The third option of ``gmp_import()`` must be either ``GMP_BIG_ENDIAN``, ``GMP_NATIVE_ENDIAN`` or ``GMP_LITTLE_ENDIAN``, but not at the same time.

Example
_______

.. code-block:: php

   <?php
   gmp_import('a', 1, GMP_BIG_ENDIAN | GMP_LITTLE_ENDIAN);
   ?>


Literal Examples
****************
+ gmp_import(): Argument #3 ($flags) cannot use multiple word order options

Solutions
_________

+ Use the ``GMP_NATIVE_ENDIAN``.
+ Use the ``GMP_BIG_ENDIAN``.
+ Use the ``GMP_LITTLE_ENDIAN``.
+ Use the default option, by omitting this argument (default is ``GMP_NATIVE_ENDIAN``).

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.
