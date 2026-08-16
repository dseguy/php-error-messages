# Type %s is redundant as it is more restrictive than type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html","name":"Type %s is redundant as it is more restrictive than type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-28T08:09:58+02:00","dateModified":"2026-07-28T08:09:58+02:00","description":"DNF (Disjunctive Normal Form) types, added in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-%s-is-redundant-as-it-is-more-restrictive-than-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
DNF (Disjunctive Normal Form) types, added in PHP 8.2, allow an intersection group to be combined inside a union, as in `(A&B)|C`. If one of the union's plain members already appears on its own, here `A`, then any intersection group built from that same name, such as `A&B`, cannot accept any value beyond what `A` alone already accepts: satisfying `A&B` always implies satisfying `A`.

PHP detects this purely by comparing the type names in the declaration, without loading any class, and rejects the more restrictive branch as dead code.

## Example

```php
<?php

interface A {}
interface B {}

function test(): (A&B)|A {}

?>
```

## Literal Examples
+ Type A&B is redundant as it is more restrictive than type A

## Alternatives
+ Remove the redundant intersection group, and keep only the broader standalone type.
+ If the intersection group was meant to be independent, use a type that is not already implied by one of the union's other members.

## Related error messages
+ [type-%s-is-redundant-with-type-%s](type-%s-is-redundant-with-type-%s.html)
+ [duplicate-type-%s-is-redundant](duplicate-type-%s-is-redundant.html)
+ [type-%s-contains-both-object-and-a-class-type](type-%s-contains-both-object-and-a-class-type.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()