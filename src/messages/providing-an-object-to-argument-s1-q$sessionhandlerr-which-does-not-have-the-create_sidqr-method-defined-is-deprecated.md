# Providing an object to argument #1 ($sessionhandler) which does not have the create_sid() method defined is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-object-to-argument-s1-q$sessionhandlerr-which-does-not-have-the-create_sidqr-method-defined-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-object-to-argument-s1-q$sessionhandlerr-which-does-not-have-the-create_sidqr-method-defined-is-deprecated.html","name":"Providing an object to argument #1 ($sessionhandler) which does not have the create_sid() method defined is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:05:46+00:00","dateModified":"2026-09-20T20:05:46+00:00","description":"``create_sid()`` and ``validateId()`` currently live on the optional ``SessionIdInterface`` \/ ``SessionUpdateTimestampHandlerInterface``, so a handler passed to ``session_set_save_handler()`` can implement ``SessionHandlerInterface`` alone and simply lack them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-object-to-argument-s1-q$sessionhandlerr-which-does-not-have-the-create_sidqr-method-defined-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`create_sid()` and `validateId()` currently live on the optional `SessionIdInterface` / `SessionUpdateTimestampHandlerInterface`, so a handler passed to `session_set_save_handler()` can implement `SessionHandlerInterface` alone and simply lack them; PHP silently falls back to its built-in session ID generation. Both methods are being folded into `SessionHandlerInterface` itself, so PHP 8.6 deprecates supplying a handler object that doesn't define `create_sid()` — it will become mandatory in PHP 9.0.

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
    // create_sid() intentionally not implemented
}

session_set_save_handler(new SessionHandlerTester());
session_start();

?>
```

## Alternatives
+ Implement a public create_sid(): string method on the session handler, generating an unpredictable, unique session ID.
+ Implement SessionIdInterface explicitly so the requirement is visible at the class declaration.

## Related error messages
+ [providing-an-object-to-argument-#1-($sessionhandler)-which-does-not-have-the-validateid()-method-defined-is-deprecated](providing-an-object-to-argument-#1-\($sessionhandler\)-which-does-not-have-the-validateid\(\)-method-defined-is-deprecated.html)

In more recent PHP versions, this error message is now :ref:`providing-an-object-to-argument-#1-($sessionhandler)-which-does-not-have-the-validateid()-method-defined-is-deprecated`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()