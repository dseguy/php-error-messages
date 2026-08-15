# define(): Declaration of case-insensitive constants is deprecated

## Description
The third argument of define() used to allow the creation of a case-insensitive global constant. The constant in the code would have been accessible with `A` or `a`, without distinction. This feature has been deprecated in PHP 7.3 and abandoned in PHP 8.0. For backward compatibility, the third argument is not reported as an error, but a warning. The constant is not case insensitive any way. Adding a fourth argument is a fatal error, and has no meaning.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/define():-declaration-of-case-insensitive-constants-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/define():-declaration-of-case-insensitive-constants-is-deprecated.html","name":"define(): Declaration of case-insensitive constants is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The third argument of define() used to allow the creation of a case-insensitive global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/define():-declaration-of-case-insensitive-constants-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

define('A', 'b', true);

?>
```

## Alternatives
+ Remove the third argument in the define() call.

In more recent PHP versions, this error message is now :ref:`define():-argument-#3-($case_insensitive)-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[caseInsensitiveDefine](caseInsensitiveDefine)