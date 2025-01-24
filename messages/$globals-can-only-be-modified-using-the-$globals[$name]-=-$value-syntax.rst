.. _\$globals-can-only-be-modified-using-the-\$globals[\$name]-=-\$value-syntax:

$GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax
-----------------------------------------------------------------------
 
.. meta::
	:description:
		$GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax: Since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: $GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax
	:og:description: Since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%24globals-can-only-be-modified-using-the-%24globals%5B%24name%5D-%3D-%24value-syntax.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax
	:twitter:description: $GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/$globals-can-only-be-modified-using-the-$globals[$name]-=-$value-syntax.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/$globals-can-only-be-modified-using-the-$globals[$name]-=-$value-syntax.html","name":"$GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jan 2025 10:37:06 +0000","dateModified":"Mon, 06 Jan 2025 10:37:06 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/$globals-can-only-be-modified-using-the-$globals[$name]-=-$value-syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Since PHP 8.1, it is not possible to replace ``$GLOBALS`` entirely. It has to be modified at the index level, and not as a whole. 

The error message is a bit misleading: on the spot operations with index are still possible, such as ``++`` or ``array_map`` or ``array_walk``.

This means that ``$GLOBALS['index']`` may be written, while ``$GLOBALS``  cannot. 

``$GLOBALS['index']`` and ``$GLOBALS`` can still be used for reading.


Example
_______

.. code-block:: php

   <?php
   
   $GLOBALS = [];
   
   // That is also OK
   $x = 3;
   echo $GLOBALS['x']++;
   
   ?>

Solutions
_________

+ Make a loop over ``$GLOBALS`` and update each index individually.
+ Avoid updating ``$GLOBALS``: keep a copy in another variable.
