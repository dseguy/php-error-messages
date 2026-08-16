# Cannot use variable $%pS twice

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-variable-$%ps-twice.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-variable-$%ps-twice.html","name":"Cannot use variable $%pS twice","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"The ``use`` clause of a closure lists the variables imported from the enclosing scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-variable-$%ps-twice.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `use` clause of a closure lists the variables imported from the enclosing scope. Each variable can only appear once in that list: importing the same variable twice, whether by value or by reference, is redundant and not allowed.

This is checked at compile time, as the `use` list is processed.

## Example

```php
<?php

function foo() {
    $a = 1;

    return function () use ($a, $a) {
        return $a;
    };
}

?>
```

## Literal Examples
+ Cannot use variable $a twice

## Alternatives
+ Remove the duplicate entry in the ``use`` clause.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()