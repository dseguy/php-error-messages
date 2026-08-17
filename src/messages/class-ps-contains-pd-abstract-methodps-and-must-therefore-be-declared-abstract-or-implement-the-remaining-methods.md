# Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-contains-pd-abstract-methodps-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-contains-pd-abstract-methodps-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html","name":"Class %s contains %d abstract method%s and must therefore be declared abstract or implement the remaining methods","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-06T22:24:52+01:00","dateModified":"2026-07-24T19:28:38+02:00","description":"A long as there is one absract method in a class, the whole class must be declared abstract","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-contains-pd-abstract-methodps-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A long as there is one absract method in a class, the whole class must be declared abstract. That way, it cannot be instantiated: if a method is missing a body for execution, this definitely must be impossible.

## Example

```php
<?php

class X {
    abstract function foo() ; 
}

?>
```

## Literal Examples
+ Class X contains 1 abstract method and must therefore be declared abstract or implement the remaining methods

## Alternatives
+ Remove the abstract option on the method(s) and give the a body block.
+ Add the abstract keyword to the class.

## Related error messages
+ [non-abstract-method-%s::%s()-must-contain-body](non-abstract-method-%s::%s\(\)-must-contain-body.html)
+ [anonymous-class-method-%s()-must-not-be-abstract](anonymous-class-method-%s\(\)-must-not-be-abstract.html)
+ [%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(](%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-\(.html)
+ [%s-%s-must-implement-%d-abstract-method%s-(](%s-%s-must-implement-%d-abstract-method%s-\(.html)
