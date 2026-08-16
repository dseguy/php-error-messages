# exponent cannot have a fractional part

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/exponent-cannot-have-a-fractional-part.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/exponent-cannot-have-a-fractional-part.html","name":"exponent cannot have a fractional part","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-15T14:42:14+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The exponent argument, aka the second, must be an integer value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/exponent-cannot-have-a-fractional-part.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The exponent argument, aka the second, must be an integer value. It might be negative, or even zero, but it cannot be with a decimal separator.

PHP tries to round it, so float values with only zeros after the decimal separator may work.

## Example

```php
<?php

echo bcpow('4.2', '3.2', 2); // 74.08

?>
```

## Alternatives
+ Check the argument with ``is_int()``.
+ Round the argument to an integer.
