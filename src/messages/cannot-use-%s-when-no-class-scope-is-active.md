# Cannot use "%s" when no class scope is active

## Description
`self`, `static` and `parent` refers to the classes, relative to the current one. As such, they can only be used inside a class or a trait.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-when-no-class-scope-is-active.html","name":"Cannot use \"%s\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"`self``, ``static`` and ``parent`` refers to the classes, relative to the current one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"%s\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
