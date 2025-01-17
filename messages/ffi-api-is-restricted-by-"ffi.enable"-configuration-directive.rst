.. _ffi-api-is-restricted-by-"ffi.enable"-configuration-directive:

FFI API is restricted by "ffi.enable" configuration directive
-------------------------------------------------------------
 
.. meta::
	:description:
		FFI API is restricted by "ffi.enable" configuration directive: FFI is an extension that allows loading C libraries, and building C data structure from PHP.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: FFI API is restricted by &quot;ffi.enable&quot; configuration directive
		:og:description: FFI is an extension that allows loading C libraries, and building C data structure from PHP
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/ffi-api-is-restricted-by-%5C%22ffi.enable%5C%22-configuration-directive.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: FFI API is restricted by "ffi.enable" configuration directive
		:twitter:description: FFI API is restricted by "ffi.enable" configuration directive: FFI is an extension that allows loading C libraries, and building C data structure from PHP
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

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
