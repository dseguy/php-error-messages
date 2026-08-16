# Implicit conversion from float %.*H to int loses precision

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-%.*h-to-int-loses-precision.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-%.*h-to-int-loses-precision.html","name":"Implicit conversion from float %.*H to int loses precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-06-05T13:18:46+02:00","dateModified":"2026-07-25T18:45:01+02:00","description":"This warning is emitted when a float is passed to a typed value that requires an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/implicit-conversion-from-float-%.*h-to-int-loses-precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This warning is emitted when a float is passed to a typed value that requires an integer. The float is truncated, not rounded, to an integer, and passed. 

This becomes a Fatal error when strict_types is actived.

The float might be a valid integer, when it has no decimal part: then, no error is emitted.

## Example

```php
<?php

function foo(int $a): int {
    // At return time
    return $a - 0.5;
}

// At call time
foo(1.1);

?>
```

## Literal Examples
+ Implicit conversion from float 1.1 to int loses precision
+ Implicit conversion from float 0.5 to int loses precision

## Alternatives
+ Cast the float to integer before using it with a typed resource.
+ Round the float to integer before using it with a typed resource.

## Related error messages
+ [the-float-%.*h-is-not-representable-as-an-int,-cast-occurred](the-float-%.\*h-is-not-representable-as-an-int,-cast-occurred.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[implicitConversionToInt](implicitConversionToInt)