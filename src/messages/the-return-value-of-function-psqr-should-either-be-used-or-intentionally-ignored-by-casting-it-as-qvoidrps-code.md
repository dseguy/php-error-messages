# The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-function-psqr-should-either-be-used-or-intentionally-ignored-by-casting-it-as-qvoidrps-code.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-function-psqr-should-either-be-used-or-intentionally-ignored-by-casting-it-as-qvoidrps-code.html","name":"The return value of function %s() should either be used or intentionally ignored by casting it as (void)%S code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-07T22:26:09+01:00","dateModified":"2025-11-18T06:36:11+01:00","description":"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-return-value-of-function-psqr-should-either-be-used-or-intentionally-ignored-by-casting-it-as-qvoidrps-code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
.

## Example

```php
<?php

#[NoDiscard]
function foo() {
    return 1;
}

foo();

?>
```

## Literal Examples
+ The return value of function foo() should either be used or intentionally ignored by casting it as (void)

## Alternatives
+ Add the ``(void)`` cast to the function call, so as to ignore the returned value.
+ Store the result of the function call in a variable and use it.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()