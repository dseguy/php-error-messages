# Cannot redeclare %s() (previously declared in %s:%d)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s()-(previously-declared-in-%s:%d).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s()-(previously-declared-in-%s:%d).html","name":"Cannot redeclare %s() (previously declared in %s:%d)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-06T22:24:52+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Functions must have a unique name: there cannot be two functions with the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s()-(previously-declared-in-%s:%d).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Functions must have a unique name: there cannot be two functions with the same name. 

Function names are case insensitive, so making changing the case doesn't make the function name unique.

In fact, two functions in the same namespace cannot have the same name, so the complete constraint is namespace + function must be unique.

## Example

```php
<?php

function foo() {}

function FOO() {}

?>
```

## Literal Examples
+ Cannot redeclare foo() (previously declared in file:3)

## Alternatives
+ Change the name of the function.
+ Make the function a closure.
+ Move the function to another namespace.

## Related error messages
+ [cannot-redeclare-function-%s()-(previously-declared-as-local-import)](cannot-redeclare-function-%s\(\)-\(previously-declared-as-local-import\).html)

In more recent PHP versions, this error message is now :ref:`cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)`.