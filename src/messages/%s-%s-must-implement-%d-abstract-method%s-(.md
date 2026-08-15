# %s %s must implement %d abstract method%s (

## Description
An enum, or an anonymous class, that does not provide a body for one or more of its abstract methods -- inherited via an implemented interface -- must implement all of them, since, unlike an ordinary class, neither an enum nor an anonymous class can be declared `abstract` to defer the implementation.

The message lists every abstract method that is still missing a concrete implementation, up to three of them; when there are more, the list ends with `...`.

This is the templated, general-purpose version of the message: the first `%s` is replaced by the kind of structure (`Enum` or `Class`, the latter for anonymous classes), the second by its name.

Before PHP 8.5, anonymous classes used the generic `%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (...)` message instead of this one, since only enums had this dedicated message. Also, before PHP 8.5, the wording for enums included the word 'private' (`must implement %d abstract private method%s`), which was corrected.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-must-implement-%d-abstract-method%s-(.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-must-implement-%d-abstract-method%s-(.html","name":"%s %s must implement %d abstract method%s (","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:18:42 +0000","dateModified":"Wed, 05 Aug 2026 14:18:42 +0000","description":"An enum, or an anonymous class, that does not provide a body for one or more of its abstract methods -- inherited via an implemented interface -- must implement all of them, since, unlike an ordinary class, neither an enum nor an anonymous class can be declared ``abstract`` to defer the implementation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-must-implement-%d-abstract-method%s-(.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface Colorful {
    function color();
}

enum Suit implements Colorful {
    case Hearts;
}

?>
```

## Literal Examples
+ Enum Suit must implement 1 abstract method (Colorful::color)
+ Class Colorful@anonymous must implement 1 abstract method (Colorful::color)

## Alternatives
+ Implement the missing method(s), with a body, in the enum or the anonymous class.
+ Remove the ``implements`` clause that brings in the abstract method.

## Related error messages
+ [%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(](asdf)
+ [class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods](asdf)
+ [anonymous-class-method-%s()-must-not-be-abstract](asdf)
+ [%s-method-%s::%s()-must-not-be-abstract](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[abstractMethodMessageSplit85](abstractMethodMessageSplit85)