# Passing an object for argument #%" PRIu32 " $vars to mb_convert_variables() is deprecated, call get_object_vars() first instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-sp-priu32--$vars-to-mb_convert_variablesqr-is-deprecated,-call-get_object_varsqr-first-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-sp-priu32--$vars-to-mb_convert_variablesqr-is-deprecated,-call-get_object_varsqr-first-instead.html","name":"Passing an object for argument #%\" PRIu32 \" $vars to mb_convert_variables() is deprecated, call get_object_vars() first instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:00:44+00:00","dateModified":"2026-09-20T20:00:44+00:00","description":"``mb_convert_variables()`` converts the character encoding of every value passed to it \u2014 strings, arrays, or objects \u2014 in place, recursing into arrays and objects alike","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-sp-priu32--$vars-to-mb_convert_variablesqr-is-deprecated,-call-get_object_varsqr-first-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mb_convert_variables()` converts the character encoding of every value passed to it — strings, arrays, or objects — in place, recursing into arrays and objects alike. Each variadic argument after the first two occupies a different, dynamic position (`$vars`), so the deprecation names whichever argument number the object was actually found at, not a fixed one. PHP 8.6 deprecates passing an object anywhere in that variadic list, whether directly or nested inside an array.

## Example

```php
<?php

class Nested {
    public $inner;
}

$nested = new Nested();
$nested->inner = 'some text';

mb_convert_variables('UTF-8', 'auto', $nested);

?>
```

## Literal Examples
+ mb_convert_variables(): Passing an object for argument #3 $vars to mb_convert_variables() is deprecated, call get_object_vars() first instead
+ mb_convert_variables(): Passing an object for argument #7 $vars to mb_convert_variables() is deprecated, call get_object_vars() first instead

## Alternatives
+ Convert the object to an array first with ``get_object_vars()`` and pass that instead.
+ Convert only the scalar string properties you need, individually.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()