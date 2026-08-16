# Session callback must have a return value of type bool, %s returned

## Description
The callbacks registered through `session_set_save_handler()` (`open`, `close`, `read`, `write`, `destroy`, `gc`, etc.) are expected to return a value of type `bool` to report success or failure, matching the signatures declared by `SessionHandlerInterface`.

Some older session handlers followed the pre-PHP 7 convention of C-style save handlers, returning an integer (`0` for success, a negative value such as `-1` for failure) instead of `true`/`false`. PHP still accepts `0` and `-1` for backward compatibility, but as of PHP 8.0.0 it emits a deprecation notice naming the actual type/value returned; any other non-bool return value triggers a `TypeError` instead.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session-callback-must-have-a-return-value-of-type-bool,-%s-returned.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session-callback-must-have-a-return-value-of-type-bool,-%s-returned.html","name":"Session callback must have a return value of type bool, %s returned","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:34 +0000","dateModified":"Tue, 11 Aug 2026 20:55:34 +0000","description":"The callbacks registered through ``session_set_save_handler()`` (``open``, ``close``, ``read``, ``write``, ``destroy``, ``gc``, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/session-callback-must-have-a-return-value-of-type-bool,-%s-returned.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

session_set_save_handler(
    open: fn (string $path, string $name): bool => true,
    close: fn (): bool => true,
    read: fn (string $id): string => '',
    // Legacy convention: 0 for success, -1 for failure,
    // instead of returning a real bool.
    write: fn (string $id, string $data): int => 0,
    destroy: fn (string $id): bool => true,
    gc: fn (int $max_lifetime): int => 0,
);

session_start();

?>
```

## Alternatives
+ Make every session handler callback explicitly return ``true`` or ``false``.
+ Implement ``SessionHandlerInterface`` on a dedicated class instead of passing loose callables, so the return types are enforced.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[session_set_save_handler](session_set_save_handler)