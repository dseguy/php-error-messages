# Returning from a finally block is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-from-a-finally-block-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-from-a-finally-block-is-deprecated.html","name":"Returning from a finally block is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:40+00:00","dateModified":"2026-09-04T14:35:40+00:00","description":"A ``return`` statement inside a ``finally`` block always wins: it replaces whatever the ``try`` or ``catch`` block was about to return, and it silently swallows any exception that was propagating out of the ``try``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-from-a-finally-block-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A `return` statement inside a `finally` block always wins: it replaces whatever the `try` or `catch` block was about to return, and it silently swallows any exception that was propagating out of the `try`. Unlike the other abrupt exits from a `finally` block, which PHP already forbids outright (`break`, `continue` and `goto` out of a `finally` are compile errors, and a `throw` automatically chains the discarded exception as `$previous`), `return` gave no indication that anything had been dropped.

PHP 8.6 deprecates this pattern. It remains legal for now, but the discarded return value or exception should be treated as a latent bug.

## Example

```php
<?php

function getConfig(): array {
    try {
        return loadConfig(); // may throw
    } finally {
        return []; // the exception, or the try's return value, is silently discarded
    }
}

?>
```

## Literal Examples
+ Returning from a finally block is deprecated

## Alternatives
+ Move the return statement out of the finally block, into the try or after it.
+ If the intent is to override the result deliberately, do so explicitly outside the finally block so the discarded value or exception is visible.

## Related error messages
+ [jump-out-of-a-finally-block-is-disallowed](jump-out-of-a-finally-block-is-disallowed.html)
+ [jump-into-a-finally-block-is-disallowed](jump-into-a-finally-block-is-disallowed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, returning from a finally block silently discarded any pending exception or return value from the try/catch, with no warning. As of PHP 8.6, doing so emits a deprecation notice.](Previously, returning from a finally block silently discarded any pending exception or return value from the try/catch, with no warning. As of PHP 8.6, doing so emits a deprecation notice.)