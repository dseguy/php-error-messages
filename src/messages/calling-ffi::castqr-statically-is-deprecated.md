# Calling FFI::cast() statically is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::castqr-statically-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::castqr-statically-is-deprecated.html","name":"Calling FFI::cast() statically is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``cast()``, ``new()`` and ``type()`` are instance methods of the object returned by ``FFI::cdef()`` or ``FFI::load()``: each loaded C definition scope has its own set of types, so casting or instantiating should happen on that specific instance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ffi::castqr-statically-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`cast()`, `new()` and `type()` are instance methods of the object returned by `FFI::cdef()` or `FFI::load()`: each loaded C definition scope has its own set of types, so casting or instantiating should happen on that specific instance.

For convenience, PHP also allowed calling these methods statically as `FFI::cast()`, `FFI::new()` and `FFI::type()`, in which case they implicitly operated on an anonymous, definition-less scope. This static shortcut is ambiguous about which set of C declarations is being used, and is now deprecated.

## Example

```php
<?php

$ffi = FFI::cdef('typedef struct { int x; int y; } point;');

$mem = $ffi->new('point');

$casted = FFI::cast('int', $mem);

?>
```

## Alternatives
+ Call ``cast()`` on the ``FFI`` instance returned by ``FFI::cdef()`` or ``FFI::load()`` instead of calling it statically: ``$ffi->cast(...)``.

## Related error messages
+ [calling-ffi::new()-statically-is-deprecated](calling-ffi::new\(\)-statically-is-deprecated.html)
+ [calling-ffi::type()-statically-is-deprecated](calling-ffi::type\(\)-statically-is-deprecated.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ffiCastStaticDeprecated](ffiCastStaticDeprecated)