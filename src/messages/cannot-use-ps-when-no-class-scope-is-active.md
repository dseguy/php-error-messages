# Cannot use "%s" when no class scope is active

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-when-no-class-scope-is-active.html","name":"Cannot use \"%s\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"`self``, ``static`` and ``parent`` refers to the classes, relative to the current one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`self`, `static` and `parent` refers to the classes, relative to the current one. As such, they can only be used inside a class or a trait.

## Example

```php
<?php

static::x;

?>
```

## Literal Examples
+ Cannot use "static::" when no class scope is active
+ Cannot use "static" when no class scope is active

## Alternatives
+ Move the code inside a method, in a trait or a class.
+ Use the full name of the class that should be used.
