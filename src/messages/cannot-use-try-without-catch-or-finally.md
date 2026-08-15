# Cannot use try without catch or finally

## Description
Try command have catch and finally clauses. While both are optional, they can't be omitted both at the same time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-try-without-catch-or-finally.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-try-without-catch-or-finally.html","name":"Cannot use try without catch or finally","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Try command have catch and finally clauses","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-try-without-catch-or-finally.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

try {}

?>
```

## Alternatives
+ Add a catch clause.
+ Add a finally clause.
