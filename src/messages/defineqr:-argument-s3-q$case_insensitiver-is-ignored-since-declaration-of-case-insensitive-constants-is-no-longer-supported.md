# define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html","name":"define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-02-15T17:03:35-05:00","dateModified":"2025-10-19T12:33:32+02:00","description":"The third argument of define() used to allow the creation of a case-insensitive global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The third argument of define() used to allow the creation of a case-insensitive global constant. The constant in the code would have been accessible with `A` or `a`, without distinction. This feature has been deprecated in PHP 7.3 and abandoned in PHP 8.0. For backward compatibility, the third argument is not reported as an error, but a warning. The constant is not case insensitive any way. Adding a fourth argument is a fatal error, and has no meaning.

## Example

```php
<?php

define('A', 'b', true);

?>
```

## Alternatives
+ Remove the third argument in the define() call.

In previous PHP versions, this error message used to be :ref:`define():-declaration-of-case-insensitive-constants-is-deprecated`.