# filter validation failed: object of type %s has no __toString() method

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-object-of-type-ps-has-no-__tostringqr-method.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-object-of-type-ps-has-no-__tostringqr-method.html","name":"filter validation failed: object of type %s has no __toString() method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:17:06+00:00","dateModified":"2026-09-18T17:17:06+00:00","description":"The filter functions convert their input to a string before applying a filter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filter-validation-failed:-object-of-type-ps-has-no-__tostringqr-method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The filter functions convert their input to a string before applying a filter. If the input is an object without a `__toString()` method, that conversion is impossible; normally the function returns `false` (or `null`/the `default` option, depending on the flags used). With `FILTER_THROW_ON_FAILURE` set, this instead throws `Filter\FilterFailedException` naming the offending class.

## Example

```php
<?php

filter_var(new stdClass(), FILTER_VALIDATE_EMAIL, FILTER_THROW_ON_FAILURE);

?>
```

## Literal Examples
+ filter validation failed: object of type stdClass has no __toString() method

## Alternatives
+ Only pass objects that implement ``__toString()``, or convert the value to a string yourself first.
+ Wrap the call in a try/catch and handle ``Filter\FilterFailedException``.

## Related error messages
+ [filter-validation-failed:-filter-%s-not-satisfied-by-%s](filter-validation-failed:-filter-%s-not-satisfied-by-%s.html)
+ [filter-validation-failed:-not-an-array-(got-%s)](filter-validation-failed:-not-an-array-\(got-%s\).html)
+ [%s::__tostring()-must-return-a-string](%s::\_\_tostring\(\)-must-return-a-string.html)

In previous PHP versions, this error message used to be :ref:`filter-validation-failed:-not-an-array-(got-%s)`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()