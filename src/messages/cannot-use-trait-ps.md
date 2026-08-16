# Cannot use trait %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-trait-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-trait-%s.html","name":"Cannot use trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:21:25 +0000","dateModified":"Thu, 06 Aug 2026 13:21:25 +0000","description":"An enum's cases and its constants share a single namespace: a case and a constant cannot have the same name, whether the constant is declared directly in the enum or brought in through a trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-trait-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An enum's cases and its constants share a single namespace: a case and a constant cannot have the same name, whether the constant is declared directly in the enum or brought in through a trait.

Here, the trait `HasColor` declares a constant called `Red`, and the enum also declares a case called `Red`; composing the enum with the trait would leave two different things answering to the same name, so PHP refuses to use the trait.

This entry records only the first sentence of the actual engine message, which continues with `, because %s::%s conflicts with enum case %s::%s`, naming the trait, the constant, the enum and the case involved.

## Example

```php
<?php

trait HasColor {
    const Red = 'red';
}

enum Color {
    use HasColor;

    case Red;
}

?>
```

## Literal Examples
+ Cannot use trait HasColor, because HasColor::Red conflicts with enum case Color::Red

## Alternatives
+ Rename the constant in the trait so it no longer collides with the enum case.
+ Rename the conflicting case in the enum.
+ Stop using the trait in this enum, and declare the constant directly in the enum, merging it with the case some other way.

## Related error messages
+ [%s-and-%s-define-the-same-constant-(%s)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed](%s-and-%s-define-the-same-constant-\(%s\)-in-the-composition-of-%s.-however,-the-definition-differs-and-is-considered-incompatible.-class-was-composed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()