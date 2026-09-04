# stream context option error_mode must be of type StreamErrorMode

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-context-option-error_mode-must-be-of-type-streamerrormode.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-context-option-error_mode-must-be-of-type-streamerrormode.html","name":"stream context option error_mode must be of type StreamErrorMode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:46+00:00","dateModified":"2026-09-04T14:35:46+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-context-option-error_mode-must-be-of-type-streamerrormode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 adds a `stream` context option, `error_mode`, that controls how errors raised by a stream operation are reported. It must be one of the cases of the `StreamErrorMode` enum: `StreamErrorMode::Error` (the default, standard PHP warnings/notices), `StreamErrorMode::Exception` (throw a `StreamException` for terminating errors), or `StreamErrorMode::Silent` (suppress error output entirely).

Passing anything other than a `StreamErrorMode` case, such as a plain string, throws a `TypeError` when the stream operation reads the option, instead of the option being silently ignored.

## Example

```php
<?php

$context = stream_context_create([
    'stream' => ['error_mode' => 'exception'],
]);

file_get_contents('https://example.invalid/', false, $context);

?>
```

## Literal Examples
+ stream context option 'error_mode' must be of type StreamErrorMode

## Alternatives
+ Pass one of the StreamErrorMode enum cases, e.g. StreamErrorMode::Exception, instead of a string or other value.

## Related error messages
+ [stream-context-option-error_store-must-be-of-type-streamerrorstore](stream-context-option-error\_store-must-be-of-type-streamerrorstore.html)
+ [stream-error-handler-must-be-a-valid-callback,-%s](stream-error-handler-must-be-a-valid-callback,-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()