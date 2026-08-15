# Type %s is redundant with type %s

## Description
In a DNF (Disjunctive Normal Form) type, two intersection groups can look textually different while describing the exact same combination of types once names are resolved. Here, `B` is only a local alias for `A` (introduced by `use A as B;`), so `X&A` and `X&B` are, in fact, the very same intersection written twice.

PHP resolves `use` aliases at compile time, notices that the second group adds nothing over the first, and reports it as redundant.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-is-redundant-with-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-is-redundant-with-type-%s.html","name":"Type %s is redundant with type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:48 +0000","dateModified":"Mon, 27 Jul 2026 16:18:48 +0000","description":"In a DNF (Disjunctive Normal Form) type, two intersection groups can look textually different while describing the exact same combination of types once names are resolved","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-is-redundant-with-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface X {}

use A as B;

function foo(): (X&A)|(X&B) {}

?>
```

## Literal Examples
+ Type X&A is redundant with type X&A

## Alternatives
+ Remove the duplicated intersection group.
+ Use the class's real name consistently, instead of mixing the name and its alias.

## Related error messages
+ [type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s](asdf)
+ [duplicate-type-%s-is-redundant](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()