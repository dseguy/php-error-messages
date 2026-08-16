# Cannot use try without catch or finally

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-try-without-catch-or-finally.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-try-without-catch-or-finally.html","name":"Cannot use try without catch or finally","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-06T09:29:38+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Try command have catch and finally clauses","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-try-without-catch-or-finally.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Try command have catch and finally clauses. While both are optional, they can't be omitted both at the same time.

## Example

```php
<?php

try {}

?>
```

## Alternatives
+ Add a catch clause.
+ Add a finally clause.
