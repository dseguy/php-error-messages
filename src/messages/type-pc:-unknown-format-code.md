# Type %c: unknown format code

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-pc:-unknown-format-code.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-pc:-unknown-format-code.html","name":"Type %c: unknown format code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-29T18:49:51+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"pack() and unpack() convert data between a string representation and another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-pc:-unknown-format-code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
pack() and unpack() convert data between a string representation and another. They both use a format string, passed as first argument, that specifies how the data of the second argument are transformed. This format string uses a limited set of letters (and `@`) to express these transformation. Any other character is not recognized and produces this error.

The valid characters are : `a, A, h, H, c, C, s, S, n, v, i, I, l, L, N, V, q, Q, J, P, f, g, G, d, e, E, x, X, Z, @` 

The format is checked after collecting the parameters, and before attempting the transformation.

## Example

```php
<?php

$array = unpack("z", $someData);

?>
```

## Literal Examples
+ Type z: unknown format code

## Alternatives
+ Remove the unknown characters.
+ Fix the unknown character with a valid one.

## Related error messages
+ [Listofvalidcharacters](https://www.php.net/pack)
