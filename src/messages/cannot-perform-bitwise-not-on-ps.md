# Cannot perform bitwise not on %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-perform-bitwise-not-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-perform-bitwise-not-on-%s.html","name":"Cannot perform bitwise not on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-01T22:43:32+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Bitwise operations are only available on integers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-perform-bitwise-not-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Bitwise operations are only available on integers. Other types are forbidden. Among the operations `~` is a bitwise operation. For the other operators, a different error is emitted.

## Example

```php
<?php

$array = [1,2];

~$array;

?>
```

## Literal Examples
+ Cannot perform bitwise not on object
+ Cannot perform bitwise not on boolean
+ Cannot perform bitwise not on resource
+ Cannot perform bitwise not on array

## Alternatives
+ Use another operator than the bitwise not, such as ``!``.
+ Cast the forbidden type to int before using the bitwise.

## Related error messages
+ [unsupported-operand-types](unsupported-operand-types.html)
