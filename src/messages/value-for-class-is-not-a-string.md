# Value for class is not a string

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-for-class-is-not-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-for-class-is-not-a-string.html","name":"Value for class is not a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:36:26+00:00","dateModified":"2026-09-04T14:36:26+00:00","description":"``Exception::getTraceAsString()`` (and the trace formatting used when an uncaught exception is printed) rebuilds a readable string from the exception's internal ``trace`` array, one frame at a time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-for-class-is-not-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Exception::getTraceAsString()` (and the trace formatting used when an uncaught exception is printed) rebuilds a readable string from the exception's internal `trace` array, one frame at a time. Each frame is expected to store its `class` entry, when present, as a string.

The trace array is normally built by the engine and always well-formed, but it can be replaced or altered by user code, typically through `ReflectionProperty::setValue()` on the `trace` property. If a frame's `class` entry is present but is not a string, this warning is raised while the frame is rendered as `[unknown]` instead of the real class name.

## Example

```php
<?php

$e = new Exception();

$ref = new ReflectionProperty($e, 'trace');
$ref->setValue($e, [
    ['class' => null, 'type' => '::', 'function' => 'foo'],
]);

echo $e->getTraceAsString();

?>
```

## Literal Examples
+ Value for class is not a string

## Alternatives
+ Do not overwrite the trace property of an exception with malformed frame data; if you need custom trace-like data, use a separate property.
+ When constructing trace frames manually, make sure class, function and type are always strings.

## Related error messages
+ [object-of-class-%s-could-not-be-converted-to-string](object-of-class-%s-could-not-be-converted-to-string.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()