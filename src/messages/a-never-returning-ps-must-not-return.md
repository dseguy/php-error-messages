# A never-returning %s must not return

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-ps-must-not-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-ps-must-not-return.html","name":"A never-returning %s must not return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-01T10:07:29+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"A function that never returns, aka, with the ``never`` return type, must not use the return statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-ps-must-not-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A function that never returns, aka, with the `never` return type, must not use the return statement. 

In fact, it must use either `throw`, `die`, `exit`, or call another function that never returns. 

This applies to methods, static methods, and any variant of closure.

The runtime-equivalent of this error is `never-returning function must not implicitly return`.

## Example

```php
<?php

function foo() : never {
	return 1;
}

?>
```

## Literal Examples
+ A never-returning function must not return.

## Alternatives
+ Remove the ``never`` return type.
+ Remove the ``return`` call.

## Related error messages
+ [never-can-only-be-used-as-a-standalone-type](never-can-only-be-used-as-a-standalone-type.html)
