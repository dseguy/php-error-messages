# %s(): Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-implicitly-marking-parameter-$ps-as-nullable-is-deprecated,-the-explicit-nullable-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-implicitly-marking-parameter-$ps-as-nullable-is-deprecated,-the-explicit-nullable-type.html","name":"%s(): Implicitly marking parameter $%s as nullable is deprecated, the explicit nullable type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:01:24+00:00","dateModified":"2026-09-24T07:01:24+00:00","description":"Before union types existed, PHP let a scalar or class-typed parameter become nullable simply by giving it a default value of ``null``, e","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-implicitly-marking-parameter-$ps-as-nullable-is-deprecated,-the-explicit-nullable-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Before union types existed, PHP let a scalar or class-typed parameter become nullable simply by giving it a default value of `null`, e.g. `function foo(int $x = null)`. The type itself still reads as `int`, but the engine silently widened it to also accept `null`, which is easy to miss when skimming a signature.

As of PHP 8.4, relying on this implicit widening emits a deprecation notice; the parameter still behaves as nullable for now, but the behaviour is expected to be dropped in a future version, at which point only an explicit nullable type would accept `null`.

## Example

```php
<?php

// $x has no type-level '?', but a default of null makes it
// implicitly nullable -- this is the deprecated PHP 5 style.
function foo(int $x = null) {
    var_dump($x);
}

foo(1);

?>
```

## Literal Examples
+ foo(): Implicitly marking parameter $x as nullable is deprecated, the explicit nullable type must be used instead

## Alternatives
+ Write the nullable type explicitly with a leading question mark: function foo(?int $x = null).
+ Or use an explicit union type: function foo(int|null $x = null).

## Related error messages
+ [PHP RFC: Deprecate implicitly nullable parameter types](https://wiki.php.net/rfc/deprecate-implicitly-nullable-types)
+ [Type declarations manual](https://www.php.net/manual/en/language.types.declarations.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()