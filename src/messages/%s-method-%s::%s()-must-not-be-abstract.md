# %s method %s::%s() must not be abstract

## Description
Interface methods are implicitly abstract: they never carry a body, since an interface only declares a contract. Writing the `abstract` keyword explicitly on an interface method is therefore redundant, and PHP rejects it.

The same message is used for enums, since 8.5: an enum can never be declared `abstract`, so none of its own methods can be `abstract` either (its cases are not classes that could provide the missing implementation).

This is the templated, general-purpose version of the message: the first `%s` is replaced by the kind of structure (`Interface` or `Enum`), the second and third by the class name and the method name.

Before PHP 8.5, declaring an `abstract` method directly inside an enum body produced the generic `%s %s must implement %d abstract method%s (...)` message instead of this dedicated one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-method-%s::%s()-must-not-be-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-method-%s::%s()-must-not-be-abstract.html","name":"%s method %s::%s() must not be abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:26:42 +0000","dateModified":"Thu, 06 Aug 2026 13:26:42 +0000","description":"Interface methods are implicitly abstract: they never carry a body, since an interface only declares a contract","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-method-%s::%s()-must-not-be-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface Colorful {
    abstract function color();
}

?>
```

## Literal Examples
+ Interface method Colorful::color() must not be abstract
+ Enum method Suit::foo() must not be abstract

## Alternatives
+ Remove the ``abstract`` keyword from the method declaration.
+ If the method needs a real implementation, give it a body instead of declaring it ``abstract``.

## Related error messages
+ [anonymous-class-method-%s()-must-not-be-abstract](asdf)
+ [class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract](asdf)
+ [%s-%s-must-implement-%d-abstract-method%s-(](asdf)
+ [interface-%s-cannot-contain-non-abstract-method-%s()](asdf)
+ [%s-function-%s::%s()-cannot-contain-body](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[abstractMethodMessageSplit85](abstractMethodMessageSplit85)