# Unsupported declare \'%s\'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-declare-'%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-declare-'%s'.html","name":"Unsupported declare \\'%s\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-29T12:00:48+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"``declare`` sets some directives for the file or block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-declare-'%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`declare` sets some directives for the file or block. The possible directives are limited to three: `strict_types`, the most common, `ticks` and `encoding`.

## Example

```php
<?php

declare(a = 1);

?>
```

## Alternatives
+ Use one of the three valid declare directives.
+ Remove the declare call.
