# Class %s implementing SessionHandlerInterface is missing the validateId() method which will be required in PHP 9.0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-implementing-sessionhandlerinterface-is-missing-the-validateidqr-method-which-will-be-required-in-php-9.0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-implementing-sessionhandlerinterface-is-missing-the-validateidqr-method-which-will-be-required-in-php-9.0.html","name":"Class %s implementing SessionHandlerInterface is missing the validateId() method which will be required in PHP 9.0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:50:04+00:00","dateModified":"2026-09-18T15:50:04+00:00","description":"``SessionIdInterface::validateId()`` is currently optional: a class only needs it when it also implements ``SessionIdInterface`` (as ``SessionHandler`` does internally)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-implementing-sessionhandlerinterface-is-missing-the-validateidqr-method-which-will-be-required-in-php-9.0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SessionIdInterface::validateId()` is currently optional: a class only needs it when it also implements `SessionIdInterface` (as `SessionHandler` does internally). PHP is moving toward merging `SessionIdInterface` into `SessionHandlerInterface` itself, so that every custom session handler is required to validate incoming session identifiers before they are used. Starting with this deprecation, any class implementing `SessionHandlerInterface` without a `validateId()` method triggers a warning, because in PHP 9.0 the method will become mandatory and its absence will be a fatal error.

## Example

```php
<?php

class MySessionHandler implements SessionHandlerInterface {
    public function open($path, $name): bool { return true; }
    public function close(): bool { return true; }
    public function read($id): string|false { return ''; }
    public function write($id, $data): bool { return true; }
    public function destroy($id): bool { return true; }
    public function gc($max_lifetime): int|false { return 0; }
}

session_set_save_handler(new MySessionHandler());
session_start();

?>
```

## Literal Examples
+ Class MySessionHandler implementing SessionHandlerInterface is missing the validateId() method which will be required in PHP 9.0

## Alternatives
+ Add a public ``validateId(string $id): bool`` method to the class.
+ Extend ``SessionHandler`` instead of implementing ``SessionHandlerInterface`` directly; it already provides a default ``validateId()`` implementation.

## Related error messages
+ [class-%s-implementing-sessionhandlerinterface-is-missing-the-create_sid()-method-which-will-be-required-in-php-9.0](class-%s-implementing-sessionhandlerinterface-is-missing-the-create\_sid\(\)-method-which-will-be-required-in-php-9.0.html)

In previous PHP versions, this error message used to be :ref:`class-%s-implementing-sessionhandlerinterface-is-missing-the-create_sid()-method-which-will-be-required-in-php-9.0`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[sessionHandlerCompleteInterface](sessionHandlerCompleteInterface)