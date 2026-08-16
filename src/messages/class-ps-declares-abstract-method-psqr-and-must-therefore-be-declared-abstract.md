# Class %s declares abstract method %s() and must therefore be declared abstract

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract.html","name":"Class %s declares abstract method %s() and must therefore be declared abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-18T06:36:11+01:00","dateModified":"2026-07-24T19:28:38+02:00","description":"A class that contains an ``abstract`` method must also be declared ``abstract``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-declares-abstract-method-%s()-and-must-therefore-be-declared-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A class that contains an `abstract` method must also be declared `abstract`.

## Example

```php
<?php

class A {
    abstract function foo() ;
}

?>
```

## Alternatives
+ Remove the ``abstract`` method.
+ Remove the ``abstract`` option on the method and give it a body.
+ Add the ``abstract`` option to the class.

## Related error messages
+ [%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(](%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-\(.html)
+ [%s-method-%s::%s()-must-not-be-abstract](%s-method-%s::%s\(\)-must-not-be-abstract.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()