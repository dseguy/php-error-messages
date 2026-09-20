# Providing an object to argument #1 ($sessionhandler) which does not have the validateId() method defined is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-object-to-argument-s1-q$sessionhandlerr-which-does-not-have-the-validateidqr-method-defined-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-object-to-argument-s1-q$sessionhandlerr-which-does-not-have-the-validateidqr-method-defined-is-deprecated.html","name":"Providing an object to argument #1 ($sessionhandler) which does not have the validateId() method defined is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:05:41+00:00","dateModified":"2026-09-20T20:05:41+00:00","description":"``validateId()`` currently lives on the optional ``SessionUpdateTimestampHandlerInterface``, so a handler passed to ``session_set_save_handler()`` can implement only ``SessionHandlerInterface`` and lack it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-object-to-argument-s1-q$sessionhandlerr-which-does-not-have-the-validateidqr-method-defined-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`validateId()` currently lives on the optional `SessionUpdateTimestampHandlerInterface`, so a handler passed to `session_set_save_handler()` can implement only `SessionHandlerInterface` and lack it; with `session.use_strict_mode` enabled, PHP falls back to accepting any externally supplied session ID without validating it, weakening the protection strict mode is meant to provide. `validateId()` is being folded into `SessionHandlerInterface` itself, so PHP 8.6 deprecates supplying a handler object that doesn't define it — it will become mandatory in PHP 9.0.

## Example

```php
<?php

class SessionHandlerTester implements SessionHandlerInterface {
    public function close(): bool { return true; }
    public function destroy($id): bool { return true; }
    public function gc($max_lifetime): int|false { return 1; }
    public function open($path, $name): bool { return true; }
    public function read($id): string { return ''; }
    public function write($id, $data): bool { return true; }
    // validateId() intentionally not implemented
}

session_set_save_handler(new SessionHandlerTester());
session_start();

?>
```

## Alternatives
+ Implement a public validateId(string $id): bool method on the session handler that checks whether the given ID already exists in storage.
+ Implement SessionUpdateTimestampHandlerInterface (which also adds updateTimestamp()) explicitly so the requirement is visible at the class declaration.

## Related error messages
+ [providing-an-object-to-argument-#1-($sessionhandler)-which-does-not-have-the-create_sid()-method-defined-is-deprecated](providing-an-object-to-argument-#1-\($sessionhandler\)-which-does-not-have-the-create\_sid\(\)-method-defined-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`providing-an-object-to-argument-#1-($sessionhandler)-which-does-not-have-the-create_sid()-method-defined-is-deprecated`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()