# %s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed

## Description
There is no conflict resolution for properties: when two traits used by the same class declare a property with the same name, the property must be defined identically in both, or PHP raises this error while composing the class.

To be considered compatible, the property must have the same visibility, the same type, the same default value, and the same `readonly`/`static` modifiers in every trait it comes from.

Unlike methods, property conflicts cannot be settled with an `insteadof` or `as` rule in the `use` block: the only way out is to make the definitions match, or to remove the property from all but one trait.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-and-%s-define-the-same-property-($%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-and-%s-define-the-same-property-($%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html","name":"%s and %s define the same property ($%s) in the composition of %s. However, the definition differs and is considered incompatible. Class was composed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 08:59:08 +0000","dateModified":"Thu, 06 Aug 2026 08:59:08 +0000","description":"There is no conflict resolution for properties: when two traits used by the same class declare a property with the same name, the property must be defined identically in both, or PHP raises this error while composing the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-and-%s-define-the-same-property-($%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

trait A {
    public int $count = 0;
}

trait B {
    protected int $count = 1;
}

class C {
    use A, B;
}

?>
```

## Literal Examples
+ A and B define the same property ($count) in the composition of C. However, the definition differs and is considered incompatible. Class was composed

## Alternatives
+ Make the property declaration identical (visibility, type, default value and modifiers) in every trait.
+ Remove the property from all traits but one.
+ Declare the property directly on the class instead, and remove it from the traits.

## Related error messages
+ [%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()