# %s %s inherits both %s::%s and %s::%s

## Description
PHP reports duplicate constant definitions in different interfaces.

This is very unusual occurrence, reported at linting time. It may also lead to quite a set back when one has to untangle these definitions.

So, shall we always give unique names across interfaces? Or just avoid multiple interfaces with constants on the same class?

There is no 'use' expression to solve the conflict. The same applies to traits, though they can resolve conflicts with the use expression.

Also, multiple same methods in different interface are OK.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-inherits-both-%s::%s-and-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-inherits-both-%s::%s-and-%s::%s.html","name":"%s %s inherits both %s::%s and %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"PHP reports duplicate constant definitions in different interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-inherits-both-%s::%s-and-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface Test1 {
    const FOO = 10;
}

interface Test2 {
    const FOO = 10;
}

class Test implements Test1, Test2 {
}

echo Done\n;
?>
```

## Literal Examples
+ class test inherits both test1::FOO and test2::FOO

## Alternatives
+ Remove one of the constant definition.
+ Rename one of the interface constant.
+ Define the conflicted constant in the class.
+ Remove one of the interfaces.

## Related error messages
+ [class-%s-cannot-implement-both-iterator-and-iteratoraggregate-at-the-same-time](asdf)
