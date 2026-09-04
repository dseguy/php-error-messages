# stream error handler must be a valid callback, %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-error-handler-must-be-a-valid-callback,-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-error-handler-must-be-a-valid-callback,-ps.html","name":"stream error handler must be a valid callback, %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:56+00:00","dateModified":"2026-09-04T14:35:56+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-error-handler-must-be-a-valid-callback,-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 adds a `stream` context option, `error_handler`, that receives the `StreamError[]` produced by a stream operation through a callback with the signature `function(array $errors): void`.

If the supplied value is not actually callable, PHP throws a `TypeError` whose message is completed with the specific reason returned by the callable check, for example "array must have exactly two elements" or "function ... does not exist".

## Example

```php
<?php

$context = stream_context_create([
    'stream' => ['error_handler' => 'this is not a callback'],
]);

file_get_contents('https://example.invalid/', false, $context);

?>
```

## Literal Examples
+ stream error handler must be a valid callback, no array or string given
+ stream error handler must be a valid callback, function 'doesNotExist' not found or invalid function name

## Alternatives
+ Pass a real callable (closure, function name, or [object, method] array) as the error_handler stream context option.

## Related error messages
+ [stream-context-option-error_mode-must-be-of-type-streamerrormode](stream-context-option-error\_mode-must-be-of-type-streamerrormode.html)
+ [stream-context-option-error_store-must-be-of-type-streamerrorstore](stream-context-option-error\_store-must-be-of-type-streamerrorstore.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()