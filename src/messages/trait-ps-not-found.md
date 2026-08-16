# Trait "%s" not found

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-\"%s\"-not-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-\"%s\"-not-found.html","name":"Trait \"%s\" not found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trait-\"%s\"-not-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when a trait is mentioned in the conflict resolution expression, but the trait is not part of the class.

PHP takes into consideration all the traits, even if they are added later than the conflict class.

## Example

```php
<?php

class X  { 
    // C is not a used trait
    use A, B { C::d insteadof E;}

    // E is a used trait, even if is not in the use above.
    use E;
}
?>
```

## Literal Examples
+ Trait "E" not found

## Alternatives
+ Add the missing trait.
+ Remove the missing trait and its conflict resolution.
