# Calling FFI::type() statically is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::typeqr-statically-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::typeqr-statically-is-deprecated.html","name":"Calling FFI::type() statically is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-22T08:54:21+00:00","dateModified":"2026-08-22T08:54:21+00:00","description":"``type()``, ``cast()`` and ``new()`` are instance methods of the object returned by ``FFI::cdef()`` or ``FFI::load()``: each loaded C definition scope has its own set of types, so resolving a type name should happen on that specific instance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::typeqr-statically-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`type()`, `cast()` and `new()` are instance methods of the object returned by `FFI::cdef()` or `FFI::load()`: each loaded C definition scope has its own set of types, so resolving a type name should happen on that specific instance.

For convenience, PHP also allowed calling these methods statically as `FFI::type()`, `FFI::cast()` and `FFI::new()`, in which case they implicitly operated on an anonymous, definition-less scope. This static shortcut is ambiguous about which set of C declarations is being used, and is now deprecated.

## Example

```php
<?php

FFI::cdef('typedef struct { int x; int y; } point;');

$type = FFI::type('point');

?>
```

## Alternatives
+ Call ``type()`` on the ``FFI`` instance returned by ``FFI::cdef()`` or ``FFI::load()`` instead of calling it statically: ``$ffi->type(...)``.

## Related error messages
+ [calling-ffi::cast()-statically-is-deprecated](calling-ffi::cast\(\)-statically-is-deprecated.html)
+ [calling-ffi::new()-statically-is-deprecated](calling-ffi::new\(\)-statically-is-deprecated.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ffiTypeStaticDeprecated](ffiTypeStaticDeprecated)