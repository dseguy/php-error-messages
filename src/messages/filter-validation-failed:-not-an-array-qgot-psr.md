# filter validation failed: not an array (got %s)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-not-an-array-qgot-psr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-not-an-array-qgot-psr.html","name":"filter validation failed: not an array (got %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:01+00:00","dateModified":"2026-09-18T17:17:01+00:00","description":"The ``FILTER_REQUIRE_ARRAY`` flag asks the filter functions to treat the input as an array and filter each element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-not-an-array-qgot-psr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `FILTER_REQUIRE_ARRAY` flag asks the filter functions to treat the input as an array and filter each element. If the value is not actually an array, this normally makes the function return `false`. When `FILTER_THROW_ON_FAILURE` is combined with `FILTER_REQUIRE_ARRAY`, that same situation instead throws `Filter\FilterFailedException` naming the type that was received.

## Example

```php
<?php

filter_var('a', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY | FILTER_THROW_ON_FAILURE);

?>
```

## Literal Examples
+ filter validation failed: not an array (got string)

## Alternatives
+ Pass an array when using FILTER_REQUIRE_ARRAY, or drop that flag if a scalar is expected.
+ Wrap the call in a try/catch and handle ``Filter\FilterFailedException``.

## Related error messages
+ [filter-validation-failed:-filter-%s-not-satisfied-by-%s](filter-validation-failed:-filter-%s-not-satisfied-by-%s.html)
+ [filter-validation-failed:-object-of-type-%s-has-no-__tostring()-method](filter-validation-failed:-object-of-type-%s-has-no-\_\_tostring\(\)-method.html)

In previous PHP versions, this error message used to be :ref:`filter-validation-failed:-filter-%s-not-satisfied-by-%s`.
In more recent PHP versions, this error message is now :ref:`filter-validation-failed:-object-of-type-%s-has-no-__tostring()-method`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()