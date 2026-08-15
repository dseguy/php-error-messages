# FFI API is restricted by "ffi.enable" configuration directive

## Description
FFI is an extension that allows loading C libraries, and building C data structure from PHP. This is a powerful interface, that comes with possible security concerns. Not only FFI must be compiled with PHP, but it also has to be allowed in the php.ini file to be executable.

Since this error message is provided by FFI, it means FFI is installed on the system, but it is not enabled in the php.ini.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ffi-api-is-restricted-by-\"ffi.enable\"-configuration-directive.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ffi-api-is-restricted-by-\"ffi.enable\"-configuration-directive.html","name":"FFI API is restricted by \"ffi.enable\" configuration directive","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"FFI is an extension that allows loading C libraries, and building C data structure from PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ffi-api-is-restricted-by-\"ffi.enable\"-configuration-directive.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
// create FFI object, loading libc and exporting function printf()
$ffi = FFI::cdef(
    "int printf(const char *format, ...);", // this is a regular C declaration
    "libc.so.6");

?>
```

## Alternatives
+ Enable FFI in the php.ini.
