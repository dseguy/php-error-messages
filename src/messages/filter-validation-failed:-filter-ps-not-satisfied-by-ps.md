# filter validation failed: filter %s not satisfied by '%s'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-filter-ps-not-satisfied-by-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-filter-ps-not-satisfied-by-ps.html","name":"filter validation failed: filter %s not satisfied by '%s'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:16:56+00:00","dateModified":"2026-09-18T17:16:56+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-filter-ps-not-satisfied-by-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.5 adds the `FILTER_THROW_ON_FAILURE` flag, usable with `filter_var()`, `filter_var_array()`, `filter_input()` and `filter_input_array()`. When it is set and the chosen filter (e.g. `FILTER_VALIDATE_EMAIL`) rejects the value, a `Filter\FilterFailedException` is thrown instead of the function returning `false`, naming both the filter and the offending value.

## Example

```php
<?php

filter_var('not-an-email', FILTER_VALIDATE_EMAIL, FILTER_THROW_ON_FAILURE);

?>
```

## Literal Examples
+ filter validation failed: filter validate_email not satisfied by 'not-an-email'

## Alternatives
+ Wrap the call in a try/catch and handle ``Filter\FilterFailedException``.
+ Do not pass FILTER_THROW_ON_FAILURE if you prefer to check the return value for ``false`` instead.

## Related error messages
+ [filter-validation-failed:-not-an-array-(got-%s)](filter-validation-failed:-not-an-array-\(got-%s\).html)
+ [filter-validation-failed:-object-of-type-%s-has-no-__tostring()-method](filter-validation-failed:-object-of-type-%s-has-no-\_\_tostring\(\)-method.html)
+ [cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure](cannot-use-both-filter\_null\_on\_failure-and-filter\_throw\_on\_failure.html)

In more recent PHP versions, this error message is now :ref:`filter-validation-failed:-not-an-array-(got-%s)`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()