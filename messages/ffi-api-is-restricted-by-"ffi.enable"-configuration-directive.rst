.. _ffi-api-is-restricted-by-"ffi.enable"-configuration-directive:

FFI API is restricted by "ffi.enable" configuration directive
-------------------------------------------------------------
 
.. meta::
	:description:
		FFI API is restricted by "ffi.enable" configuration directive: FFI is an extension that allows loading C libraries, and building C data structure from PHP.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: FFI API is restricted by &quot;ffi.enable&quot; configuration directive
	:og:description: FFI is an extension that allows loading C libraries, and building C data structure from PHP
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/ffi-api-is-restricted-by-%22ffi.enable%22-configuration-directive.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: FFI API is restricted by "ffi.enable" configuration directive
	:twitter:description: FFI API is restricted by "ffi.enable" configuration directive: FFI is an extension that allows loading C libraries, and building C data structure from PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/ffi-api-is-restricted-by-\"ffi.enable\"-configuration-directive.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/ffi-api-is-restricted-by-\"ffi.enable\"-configuration-directive.html","name":"FFI API is restricted by \"ffi.enable\" configuration directive","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Oct 2025 09:05:24 +0000","dateModified":"Sun, 19 Oct 2025 09:05:24 +0000","description":"FFI is an extension that allows loading C libraries, and building C data structure from PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/ffi-api-is-restricted-by-\"ffi.enable\"-configuration-directive.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
FFI is an extension that allows loading C libraries, and building C data structure from PHP. This is a powerful interface, that comes with possible security concerns. Not only FFI must be compiled with PHP, but it also has to be allowed in the php.ini file to be executable.

Since this error message is provided by FFI, it means FFI is installed on the system, but it is not enabled in the php.ini.

Example
_______

.. code-block:: php

   <?php
   // create FFI object, loading libc and exporting function printf()
   $ffi = FFI::cdef(
       "int printf(const char *format, ...);", // this is a regular C declaration
       "libc.so.6");
   
   ?>

Solutions
_________

+ Enable FFI in the php.ini.
