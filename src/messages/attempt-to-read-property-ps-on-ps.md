# Attempt to read property "%s" on %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-read-property-\"%s\"-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-read-property-\"%s\"-on-%s.html","name":"Attempt to read property \"%s\" on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:45+00:00","dateModified":"2026-03-31T09:10:45+00:00","description":"This error reports that a non-object was used with an object syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-read-property-\"%s\"-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that a non-object was used with an object syntax. Non-objects are integers, floats, strings, null, booleans, etc.

This is a warning, so PHP will continue execution, using `null` as a result of this operation.

## Example

```php
<?php

$integer = 1;
var_dump($integer->a);

$array = [3];
var_dump($array?->a);

?>
```

## Literal Examples
+ Attempt to read property "a" on int
+ Attempt to read property "a" on array
+ Attempt to read property "a" on float
+ Attempt to read property "a" on string
+ Attempt to read property "a" on bool

## Alternatives
+ Remove the use of the property.
+ Add a type to the underlying variable, to ensure it is an object.
+ Check the variable is an object.
