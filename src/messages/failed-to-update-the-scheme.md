# Failed to update the scheme

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-update-the-scheme.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-update-the-scheme.html","name":"Failed to update the scheme","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:16:29+00:00","dateModified":"2026-09-18T17:16:29+00:00","description":"This is an internal, defensive error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-update-the-scheme.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is an internal, defensive error. `Uri\Rfc3986\Uri::withScheme()` asks the bundled `uriparser` library to replace the scheme component; the library can only report success or a syntax error (surfaced as `the-specified-scheme-is-malformed`). This exception is thrown for any other, unexpected result code, which should not be reachable from PHP userland — it exists purely as a safety net, not as a condition an application is expected to trigger.

## Example

```php

```

## Alternatives
+ This should not occur during normal use; if it does, it indicates a bug in the URI extension or the bundled uriparser library rather than a mistake in your code.

## Related error messages
+ [the-specified-scheme-is-malformed](the-specified-scheme-is-malformed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()