# define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported, this will be an error in PHP 9.0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-this-will-be-an-error-in-php-9.0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-this-will-be-an-error-in-php-9.0.html","name":"define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported, this will be an error in PHP 9.0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:50:08+00:00","dateModified":"2026-09-18T15:50:08+00:00","description":"Case-insensitive constants were deprecated in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-this-will-be-an-error-in-php-9.0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Case-insensitive constants were deprecated in PHP 7.3 and their support was removed in PHP 8.0: passing `true` as the third argument of `define()` no longer makes the constant case-insensitive, and is simply ignored. This deprecation warns that the leniency is temporary: in PHP 9.0, passing a truthy value for `$case_insensitive` will stop being silently ignored and will instead raise a fatal error.

## Example

```php
<?php

define('FOO', 'bar', true);

?>
```

## Literal Examples
+ define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported, this will be an error in PHP 9.0

## Alternatives
+ Call ``define()`` with only two arguments: the constant name and its value.
+ Use the ``const`` keyword instead of ``define()`` if the constant does not need to be defined conditionally.

## Related error messages
+ [define():-argument-#3-($case_insensitive)-is-ignored-and-treated-as-false-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-passing-the-argument-explicitly-is-unnecessary](define\(\):-argument-#3-\($case\_insensitive\)-is-ignored-and-treated-as-false-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-passing-the-argument-explicitly-is-unnecessary.html)

In previous PHP versions, this error message used to be :ref:`define():-argument-#3-($case_insensitive)-is-ignored-and-treated-as-false-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-passing-the-argument-explicitly-is-unnecessary`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[caseInsensitiveConstant](caseInsensitiveConstant)