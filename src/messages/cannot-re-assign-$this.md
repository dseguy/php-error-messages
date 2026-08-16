# Cannot re-assign $this

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-re-assign-$this.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-re-assign-$this.html","name":"Cannot re-assign $this","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:12:36 +0000","dateModified":"Mon, 13 Jul 2026 08:12:36 +0000","description":"It is never possible to assign a new value to the pseudo-variable ``$this``, inside a class or outside","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-re-assign-$this.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is never possible to assign a new value to the pseudo-variable `$this`, inside a class or outside. In fact, it is also never allowed to unset it either. In short, it is possible to read `$this`, and nothing more.

## Example

```php
<?php

unset($this);

?>
```

## Alternatives
+ Remove this call to unset.

## Related error messages
+ [cannot-unset-$this](cannot-unset-$this.html)
+ [cannot-re-assign-auto-global-variable-%s](cannot-re-assign-auto-global-variable-%s.html)
+ [cannot-use-auto-global-as-lexical-variable](cannot-use-auto-global-as-lexical-variable.html)
+ [cannot-use-$this-as-global-variable](cannot-use-$this-as-global-variable.html)
