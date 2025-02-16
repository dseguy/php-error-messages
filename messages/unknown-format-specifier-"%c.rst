.. _unknown-format-specifier-"%c:

Unknown format specifier "%c
----------------------------
 
.. meta::
	:description:
		Unknown format specifier "%c: printf() accepts a string of formats, as the first arguments.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown format specifier &quot;%c
	:og:description: printf() accepts a string of formats, as the first arguments
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-format-specifier-%22%25c.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown format specifier "%c
	:twitter:description: Unknown format specifier "%c: printf() accepts a string of formats, as the first arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-format-specifier-\"%c.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-format-specifier-\"%c.html","name":"Unknown format specifier \"%c","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"printf() accepts a string of formats, as the first arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unknown-format-specifier-\"%c.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
printf() accepts a string of formats, as the first arguments. A format is a ``%`` character, followed by a letter. Some letters are not allowed: ``a, i, j, k, l, m, n, p, q, r, t, v, w, y, z, A, B, C, D, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, Y, Z``.

Example
_______

.. code-block:: php

   <?php
   
       printf(\%we3e\, 123); 
       //Unknown format specifier \w\
   ?>

Solutions
_________

+ Replace the reported letter with a valid format letter.
+ Duplicate the % sign, to make it literal.
