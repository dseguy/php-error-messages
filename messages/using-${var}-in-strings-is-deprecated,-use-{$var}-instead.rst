.. _using-\${var}-in-strings-is-deprecated,-use-{\$var}-instead:

Using ${var} in strings is deprecated, use {$var} instead
---------------------------------------------------------
 
.. meta::
	:description:
		Using ${var} in strings is deprecated, use {$var} instead: For variable interpolation, the double quote strings used two variants: ```` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets).
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using ${var} in strings is deprecated, use {$var} instead
	:og:description: For variable interpolation, the double quote strings used two variants: ```` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-%24%7Bvar%7D-in-strings-is-deprecated%2C-use-%7B%24var%7D-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using ${var} in strings is deprecated, use {$var} instead
	:twitter:description: Using ${var} in strings is deprecated, use {$var} instead: For variable interpolation, the double quote strings used two variants: ```` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html","name":"Using ${var} in strings is deprecated, use {$var} instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 17:16:43 +0000","dateModified":"Sun, 16 Feb 2025 17:16:43 +0000","description":"For variable interpolation, the double quote strings used two variants: ```` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
For variable interpolation, the double quote strings used two variants: ```` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets).

The first one has been deprecated, and it should be removed in PHP 9.0.

Example
_______

.. code-block:: php

   <?php
   
   $var = 'abc';
   
   echo ;
   
   ?>

Solutions
_________

+ Replace ```` with ``$var`` inside the string. It should work most of the time.
+ Replace ```` with ``{$var}`` inside the string. It works every time.
