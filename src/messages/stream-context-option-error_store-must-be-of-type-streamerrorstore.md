# stream context option error_store must be of type StreamErrorStore

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-context-option-error_store-must-be-of-type-streamerrorstore.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-context-option-error_store-must-be-of-type-streamerrorstore.html","name":"stream context option error_store must be of type StreamErrorStore","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:51+00:00","dateModified":"2026-09-04T14:35:51+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-context-option-error_store-must-be-of-type-streamerrorstore.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 adds a `stream` context option, `error_store`, that controls which errors raised during a stream operation are kept for later retrieval. It must be one of the cases of the `StreamErrorStore` enum: `Auto` (the default, decides based on `error_mode`), `None`, `NonTerminating`, `Terminating`, or `All`.

Passing anything other than a `StreamErrorStore` case throws a `TypeError` when the stream operation reads the option; PHP then falls back to deciding the store mode automatically from `error_mode`, but still reports the misuse.

## Example

```php
<?php

$context = stream_context_create([
    'stream' => ['error_store' => 'all'],
]);

file_get_contents('https://example.invalid/', false, $context);

?>
```

## Literal Examples
+ stream context option 'error_store' must be of type StreamErrorStore

## Alternatives
+ Pass one of the StreamErrorStore enum cases, e.g. StreamErrorStore::All, instead of a string or other value.

## Related error messages
+ [stream-context-option-error_mode-must-be-of-type-streamerrormode](stream-context-option-error\_mode-must-be-of-type-streamerrormode.html)
+ [stream-error-handler-must-be-a-valid-callback,-%s](stream-error-handler-must-be-a-valid-callback,-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()