# Calling mb_check_encoding() without argument is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-mb_check_encoding()-without-argument-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-mb_check_encoding()-without-argument-is-deprecated.html","name":"Calling mb_check_encoding() without argument is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"``mb_check_encoding()`` normally takes a string (or an array of strings) and checks whether it is valid in a given encoding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-mb_check_encoding()-without-argument-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mb_check_encoding()` normally takes a string (or an array of strings) and checks whether it is valid in a given encoding. It could also be called with no arguments at all, in which case the documentation claimed it would check `$_GET`, `$_POST`, `$_SERVER`, and other superglobal input for encoding validity.

In practice, this zero-argument form was never fully implemented: it only reported whether any invalid byte sequences had been detected so far during the request, rather than actually checking all of the input again. Because this behavior is confusing and unreliable, calling `mb_check_encoding()` without an argument is deprecated as of PHP 8.1.0.

## Example

```php
<?php

// Called without any argument.
var_dump(mb_check_encoding());

?>
```

## Alternatives
+ Pass the value to check explicitly, e.g. ``mb_check_encoding($value, 'UTF-8')``.
+ Validate each relevant superglobal entry individually instead of relying on the implicit whole-request check.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_check_encoding](mb_check_encoding)