# Can't use nullsafe operator in write context

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-use-nullsafe-operator-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-use-nullsafe-operator-in-write-context.html","name":"Can't use nullsafe operator in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-19T11:18:15+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"The nullsafe operator is only available for reading, not writing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-use-nullsafe-operator-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The nullsafe operator is only available for reading, not writing. Aka, it cannot be used on the left side of an assignation.

The nullsafe operator replaces any non-existing property with a `null` value: that value is not an object, and cannot handle properties on its own.

This limitation applies to assignations, short assignations, such as `.=`, `+=`, etc., pre and post incrementations `++$a->b`, and references arguments.

## Example

```php
<?php

$x = new stdClass();

$x?->a = 1;

?>
```

## Alternatives
+ Use the ``->`` operator for writing operations.

## Related error messages
+ [can't-use-function-return-value-in-write-context](cant-use-function-return-value-in-write-context.html)
+ [can't-use-method-return-value-in-write-context](cant-use-method-return-value-in-write-context.html)
+ [cannot-combine-nullsafe-operator-with-closure-creation](cannot-combine-nullsafe-operator-with-closure-creation.html)
+ [cannot-take-reference-of-a-nullsafe-chain](cannot-take-reference-of-a-nullsafe-chain.html)
