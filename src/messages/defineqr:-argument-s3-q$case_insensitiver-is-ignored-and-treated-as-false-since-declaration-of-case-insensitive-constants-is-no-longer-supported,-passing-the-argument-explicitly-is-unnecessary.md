# define(): Argument #3 ($case_insensitive) is ignored and treated as false since declaration of case-insensitive constants is no longer supported, passing the argument explicitly is unnecessary

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-and-treated-as-false-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-passing-the-argument-explicitly-is-unnecessary.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-and-treated-as-false-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-passing-the-argument-explicitly-is-unnecessary.html","name":"define(): Argument #3 ($case_insensitive) is ignored and treated as false since declaration of case-insensitive constants is no longer supported, passing the argument explicitly is unnecessary","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T18:50:34+02:00","dateModified":"2026-09-18T18:50:34+02:00","description":"Case-insensitive constants were deprecated in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defineqr:-argument-s3-q$case_insensitiver-is-ignored-and-treated-as-false-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-passing-the-argument-explicitly-is-unnecessary.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Case-insensitive constants were deprecated in PHP 7.3 and their support was removed in PHP 8.0: the third argument of `define()` has been ignored and always treated as `false` ever since. This deprecation goes one step further and flags every explicit call that still passes a (falsy) value for `$case_insensitive`, since doing so no longer has any effect and only adds noise to the call.

## Example

```php
<?php

define('FOO', 'bar', false);

?>
```

## Literal Examples
+ define(): Argument #3 ($case_insensitive) is ignored and treated as false since declaration of case-insensitive constants is no longer supported, passing the argument explicitly is unnecessary

## Alternatives
+ Call ``define()`` with only two arguments: the constant name and its value.

## Related error messages
+ [define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-this-will-be-an-error-in-php-9.0](define\(\):-argument-#3-\($case\_insensitive\)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-this-will-be-an-error-in-php-9.0.html)

In more recent PHP versions, this error message is now :ref:`define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported,-this-will-be-an-error-in-php-9.0`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[caseInsensitiveConstant](caseInsensitiveConstant)