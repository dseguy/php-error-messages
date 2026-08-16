# Match expressions may only contain one default arm

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/match-expressions-may-only-contain-one-default-arm.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/match-expressions-may-only-contain-one-default-arm.html","name":"Match expressions may only contain one default arm","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"match() expression may have one ``default`` entry, but no more than that","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/match-expressions-may-only-contain-one-default-arm.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
match() expression may have one `default` entry, but no more than that. It is the same than for switch().

## Example

```php
<?php

$a = match($b) {
	default => 1;
	default => 2;
}

?>
```

## Alternatives
+ Remove one of the default arm.
+ Remove all the default arms.

## Related error messages
+ [switch-statements-may-only-contain-one-default-clause](switch-statements-may-only-contain-one-default-clause.html)
