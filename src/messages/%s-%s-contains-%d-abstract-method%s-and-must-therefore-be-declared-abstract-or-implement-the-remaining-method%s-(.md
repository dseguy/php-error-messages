# %s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (

## Description
A class (or a trait, once it is used in a class) that does not provide a body for one or more of its abstract methods -- inherited from a parent class, or required by an implemented interface -- must itself be declared `abstract`. Otherwise PHP has no concrete implementation to call when the method is invoked, and it stops with a fatal error while linking the class.

The message lists every abstract method that is still missing a concrete implementation, up to three of them; when there are more, the list ends with `...`.

This is the templated, general-purpose version of the message: the first `%s` is replaced by the kind of structure (`Class` or `Interface`), the second by its name.

Since PHP 8.5, enums and anonymous classes no longer use this message: they get the dedicated `%s %s must implement %d abstract method%s (...)` message instead, since neither of them can be declared abstract.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(.html","name":"%s %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining method%s (","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:18:38 +0000","dateModified":"Wed, 05 Aug 2026 14:18:38 +0000","description":"A class (or a trait, once it is used in a class) that does not provide a body for one or more of its abstract methods -- inherited from a parent class, or required by an implemented interface -- must itself be declared ``abstract``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface Colorful {
    function color();
}

class Suit implements Colorful {
}

?>
```

## Literal Examples
+ Class Suit contains 1 abstract method and must therefore be declared abstract or implement the remaining method (Colorful::color)

## Alternatives
+ Implement the missing method(s), with a body, in the class.
+ Declare the class ``abstract``.
+ Remove the ``implements``/``extends`` clause that brings in the abstract method.

## Related error messages
+ [class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods](class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html)
+ [class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract](class-%s-declares-abstract-method-%s\(\)-and-must-therefore-be-declared-abstract.html)
+ [%s-%s-must-implement-%d-abstract-method%s-(](%s-%s-must-implement-%d-abstract-method%s-\(.html)
+ [anonymous-class-method-%s()-must-not-be-abstract](anonymous-class-method-%s\(\)-must-not-be-abstract.html)
+ [non-abstract-method-%s::%s()-must-contain-body](non-abstract-method-%s::%s\(\)-must-contain-body.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[abstractMethodMessageSplit85](abstractMethodMessageSplit85)