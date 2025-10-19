.. _module-"%s"-is-already-loaded:

Module "%s" is already loaded
-----------------------------
 
.. meta::
	:description:
		Module "%s" is already loaded: The current configuration of the PHP engine include twice the same extension.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Module &quot;%s&quot; is already loaded
	:og:description: The current configuration of the PHP engine include twice the same extension
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/module-%22%25s%22-is-already-loaded.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Module "%s" is already loaded
	:twitter:description: Module "%s" is already loaded: The current configuration of the PHP engine include twice the same extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/module-\"%s\"-is-already-loaded.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/module-\"%s\"-is-already-loaded.html","name":"Module \"%s\" is already loaded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Oct 2025 08:20:38 +0000","dateModified":"Sun, 19 Oct 2025 08:20:38 +0000","description":"The current configuration of the PHP engine include twice the same extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/module-\"%s\"-is-already-loaded.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The current configuration of the PHP engine include twice the same extension. The first extension is loaded and the last extension is omitted. The features are available, and the log will be filled with the warning.

PHP uses several distinct files to list the extensions to load, such as ``php.ini``, ``cond.d/*.ini``, and the SAPI configuration files, including the web server, CLI's ``php.ini``, etc.

Example
_______

.. code-block:: php

   


Literal Examples
****************
+ Module "imagick" is already loaded

Solutions
_________

+ Find the duplicate extension configuration and remove all of the, but one.

See Also
________

+ `✅ (Solved) How to Fix PHP Warning: Module ‘imagick’ already loaded Error <https://blog.radwebhosting.com/how-to-fix-php-warning-module-imagick-already-loaded/>`_
