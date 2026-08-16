# Cannot access parent:: when no class scope is active

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-parent::-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-parent::-when-no-class-scope-is-active.html","name":"Cannot access parent:: when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-17T12:32:50+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"``parent`` refers to the parent class of the one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-parent::-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`parent` refers to the parent class of the one. As such, `parent` can only be used inside a class or a trait.

## Example

```php
<?php

static::x;

?>
```

## Alternatives
+ Move the code inside a method, in a trait or a class.
+ Use the full name of the class that should be used.
