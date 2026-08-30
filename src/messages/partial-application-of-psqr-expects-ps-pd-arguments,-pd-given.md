# Partial application of %s() expects %s %d arguments, %d given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/partial-application-of-psqr-expects-ps-pd-arguments,-pd-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/partial-application-of-psqr-expects-ps-pd-arguments,-pd-given.html","name":"Partial application of %s() expects %s %d arguments, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-28T21:05:19+00:00","dateModified":"2026-08-28T21:05:19+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/partial-application-of-psqr-expects-ps-pd-arguments,-pd-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces partial function application: a `?` in an argument position stands in for a value to be supplied later, and turns the call into a `Closure` bound to whichever arguments were already given. The placeholder `...` on its own captures all of a function's still-missing required parameters instead, but a single `?` does not, so the call must still provide at least one argument slot (a value or a `?`) for every required parameter.

Here, add() requires 3 arguments, but the partial application supplies only 2 slots (the value `1` and one `?`), so PHP rejects it as underspecified rather than silently creating a closure that would itself fail as soon as it were called.

## Example

```php
<?php

function add($a, $b, $c) {
    return $a + $b + $c;
}

$partial = add(1, ?);

?>
```

## Literal Examples
+ Partial application of add() expects exactly 3 arguments, 2 given

## Alternatives
+ Provide one argument slot (a value or a ? placeholder) for every required parameter, or replace the trailing ? with ... to defer all remaining required parameters at once: add(1, ...).

## Related error messages
+ [partial-application-of-%s()-expects-at-most-%d-arguments,-%d-given](partial-application-of-%s\(\)-expects-at-most-%d-arguments,-%d-given.html)
+ [cannot-combine-partial-application-and-unpacking](cannot-combine-partial-application-and-unpacking.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()