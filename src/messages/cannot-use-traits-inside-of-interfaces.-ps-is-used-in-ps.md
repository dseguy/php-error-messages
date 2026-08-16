# Cannot use traits inside of interfaces. %s is used in %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-traits-inside-of-interfaces.-%s-is-used-in-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-traits-inside-of-interfaces.-%s-is-used-in-%s.html","name":"Cannot use traits inside of interfaces. %s is used in %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The command ``use`` cannot be used in an interface to include a trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-traits-inside-of-interfaces.-%s-is-used-in-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The command `use` cannot be used in an interface to include a trait. The trait must be included at the class level, or in another trait.

## Example

```php
<?php

interface I {
    use T;
}

?>
```

## Literal Examples
+ Cannot use traits inside of interfaces. T is used in I

## Alternatives
+ Use the trait in the target classes.
