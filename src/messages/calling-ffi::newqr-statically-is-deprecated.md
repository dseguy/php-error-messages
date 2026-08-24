# Calling FFI::new() statically is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::newqr-statically-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::newqr-statically-is-deprecated.html","name":"Calling FFI::new() statically is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-22T08:54:21+00:00","dateModified":"2026-08-22T08:54:21+00:00","description":"``new()``, ``cast()`` and ``type()`` are instance methods of the object returned by ``FFI::cdef()`` or ``FFI::load()``: each loaded C definition scope has its own set of types, so allocating a new value should happen on that specific instance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::newqr-statically-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`new()`, `cast()` and `type()` are instance methods of the object returned by `FFI::cdef()` or `FFI::load()`: each loaded C definition scope has its own set of types, so allocating a new value should happen on that specific instance.

For convenience, PHP also allowed calling these methods statically as `FFI::new()`, `FFI::cast()` and `FFI::type()`, in which case they implicitly operated on an anonymous, definition-less scope. This static shortcut is ambiguous about which set of C declarations is being used, and is now deprecated.

## Example

```php
<?php

FFI::cdef('typedef struct { int x; int y; } point;');

$mem = FFI::new('point');

?>
```

## Alternatives
+ Call ``new()`` on the ``FFI`` instance returned by ``FFI::cdef()`` or ``FFI::load()`` instead of calling it statically: ``$ffi->new(...)``.

## Related error messages
+ [calling-ffi::cast()-statically-is-deprecated](calling-ffi::cast\(\)-statically-is-deprecated.html)
+ [calling-ffi::type()-statically-is-deprecated](calling-ffi::type\(\)-statically-is-deprecated.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ffiNewStaticDeprecated](ffiNewStaticDeprecated)