# Cannot unset $this

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-$this.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-$this.html","name":"Cannot unset $this","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-02T14:49:04+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"It is never possible to unset the pseudo-variable ``$this``, inside a class or outside","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-$this.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is never possible to unset the pseudo-variable `$this`, inside a class or outside. Actually, it is also never allowed to write to it. In short, it is possible to read `$this`, and nothing more.

## Example

```php
<?php

unset($this);

?>
```

## Alternatives
+ Remove this call to unset.

## Related error messages
+ [cannot-re-assign-$this](cannot-re-assign-$this.html)
