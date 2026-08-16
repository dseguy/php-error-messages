# Unknown format specifier "%c

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-format-specifier-\"%c.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-format-specifier-\"%c.html","name":"Unknown format specifier \"%c","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"printf() accepts a string of formats, as the first arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-format-specifier-\"%c.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
printf() accepts a string of formats, as the first arguments. A format is a `%` character, followed by a letter. Some letters are not allowed: `a, i, j, k, l, m, n, p, q, r, t, v, w, y, z, A, B, C, D, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, Y, Z`.

## Example

```php
<?php

    printf(\%we3e\, 123); 
    //Unknown format specifier \w\

?>
```

## Alternatives
+ Replace the reported letter with a valid format letter.
+ Duplicate the % sign, to make it literal.
