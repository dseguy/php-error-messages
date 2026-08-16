# Case %s of non-backed enum %s must not have a value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s-of-non-backed-enum-%s-must-not-have-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s-of-non-backed-enum-%s-must-not-have-a-value.html","name":"Case %s of non-backed enum %s must not have a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"An enum is either purely a set of named cases (a ``pure`` enum), or it is a ``backed`` enum, where every case is associated with an ``int`` or ``string`` value declared after the enum name, like ``enum Suit: int``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s-of-non-backed-enum-%s-must-not-have-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An enum is either purely a set of named cases (a `pure` enum), or it is a `backed` enum, where every case is associated with an `int` or `string` value declared after the enum name, like `enum Suit: int`.

Once an enum does not declare a backing type, none of its cases may be given a value. Assigning a value to a case, like `case Hearts = 1;`, requires the enum itself to declare a backing type.

## Example

```php
<?php

enum Suit
{
    case Hearts = 1;
    case Spades;
}

?>
```

## Literal Examples
+ Case Hearts of non-backed enum Suit must not have a value

## Alternatives
+ Remove the value from the case declaration, to keep the enum a pure enum.
+ Add a backing type to the enum declaration, such as ``enum Suit: int``, so every case can carry a value.

## Related error messages
+ [enum-case-type-%s-does-not-match-enum-backing-type-%s](enum-case-type-%s-does-not-match-enum-backing-type-%s.html)
+ [enum-backing-type-must-be-int-or-string](enum-backing-type-must-be-int-or-string.html)
+ [duplicate-value-in-enum-%s-for-cases-%s-and-%s](duplicate-value-in-enum-%s-for-cases-%s-and-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()