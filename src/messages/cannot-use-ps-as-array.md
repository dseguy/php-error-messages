# Cannot use %s as array

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-ps-as-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-ps-as-array.html","name":"Cannot use %s as array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-07T22:26:09+01:00","dateModified":"2025-11-07T22:26:09+01:00","description":"This error is emitted when the right operand of a ``list`` operation is not an array, but a scalar, with the exception of ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-ps-as-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when the right operand of a `list` operation is not an array, but a scalar, with the exception of `null`.

## Example

```php
<?php

list($a, $b) = 'abc';

?>
```

## Literal Examples
+ Cannot use string as array
+ Cannot use boolean as array
+ Cannot use integer as array
+ Cannot use float as array
+ Cannot use object as array

## Alternatives
+ Convert the right operand to an array first.
+ Use a simple assignation, rather than ``list``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[destructuringNonArray](destructuringNonArray)