# Non-abstract method %s::%s() must contain body

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-abstract-method-%s::%s()-must-contain-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-abstract-method-%s::%s()-must-contain-body.html","name":"Non-abstract method %s::%s() must contain body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-06T22:24:52+01:00","dateModified":"2026-08-15T17:29:36+02:00","description":"A method must have a body block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-abstract-method-%s::%s()-must-contain-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A method must have a body block. When it has no body block, it has a semicolon instead, and it must have the `abstract` keyword for the method, and following, to the class.

## Example

```php
<?php

class X {
     function foo();
}

?>
```

## Literal Examples
+ Non-abstract method X::foo() must contain body

## Alternatives
+ Add a body block to the method.
+ Add a abstract option to the method and to the class.

## Related error messages
+ [class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods](class-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-methods.html)
+ [%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-(](%s-%s-contains-%d-abstract-method%s-and-must-therefore-be-declared-abstract-or-implement-the-remaining-method%s-\(.html)
+ [%s-function-%s::%s()-cannot-contain-body](%s-function-%s::%s\(\)-cannot-contain-body.html)
