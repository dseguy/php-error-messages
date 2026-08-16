# Property hook list must not be empty

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-list-must-not-be-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-list-must-not-be-empty.html","name":"Property hook list must not be empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-30T22:07:36+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"It is possible to add a block, after a property definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-list-must-not-be-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to add a block, after a property definition. This is where the `get` and `set` methods are defined. There can be one or two of these methods, but the block just cannot be left empty.

## Example

```php
<?php

class X {
	public int $p = 3 {	}
}

?>
```

## Alternatives
+ Create at least one accessor method in the block.
+ Remove the block.
