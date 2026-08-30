# Partial application of %s() expects at most %d arguments, %d given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/partial-application-of-psqr-expects-at-most-pd-arguments,-pd-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/partial-application-of-psqr-expects-at-most-pd-arguments,-pd-given.html","name":"Partial application of %s() expects at most %d arguments, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-28T21:05:25+00:00","dateModified":"2026-08-28T21:05:25+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/partial-application-of-psqr-expects-at-most-pd-arguments,-pd-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces partial function application: a `?` in an argument position stands in for a value to be supplied later, and turns the call into a `Closure` bound to whichever arguments were already given. A partial-application call still can't supply more argument slots (values or `?` placeholders combined) than the target function actually declares, unless that function is itself variadic.

Here, add() declares only 2 parameters, but the partial application supplies 4 slots (`1`, `2`, `3`, and a trailing `?`), so PHP rejects it instead of creating a closure that could never be called successfully.

## Example

```php
<?php

function add($a, $b) {
    return $a + $b;
}

$partial = add(1, 2, 3, ?);

?>
```

## Literal Examples
+ Partial application of add() expects at most 2 arguments, 4 given

## Alternatives
+ Don't supply more argument slots (values or ? placeholders) to a partial application than the function declares, unless the function itself accepts a variadic parameter.

## Related error messages
+ [partial-application-of-%s()-expects-%s-%d-arguments,-%d-given](partial-application-of-%s\(\)-expects-%s-%d-arguments,-%d-given.html)
+ [cannot-combine-partial-application-and-unpacking](cannot-combine-partial-application-and-unpacking.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()