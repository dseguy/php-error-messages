# syntax error, unexpected token ";", expecting "("

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;,-expecting-q.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;,-expecting-q.html","name":"syntax error, unexpected token \";\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This syntax error is related to a new PHP feature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;,-expecting-q.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This syntax error is related to a new PHP feature. In PHP 8.3, a new syntax for dynamic access to class constants was introduced. It was not supported until then.

## Example

```php
<?php

class A {
	public const A = 1;
}

$b = 'A';

echo A::{$b};

?>
```

## Alternatives
+ Upgrade PHP to PHP 8.3 or more recent.
+ Use a call to constant() to reach the value of the class constant.
