# Declaring %s constant called namespace is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaring-ps-constant-called-namespace-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaring-ps-constant-called-namespace-is-deprecated.html","name":"Declaring %s constant called namespace is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:21+00:00","dateModified":"2026-09-04T14:35:21+00:00","description":"``namespace`` is a reserved word in PHP, but a historical lexer exception let it be used as the name of a class, interface, trait or enum constant, as well as a static property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaring-ps-constant-called-namespace-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`namespace` is a reserved word in PHP, but a historical lexer exception let it be used as the name of a class, interface, trait or enum constant, as well as a static property. PHP 8.6 deprecates that exception for constants, so that `namespace` can be reserved for a possible future `::namespace` pseudo-constant, analogous to the existing `::class`.

The deprecation notice is emitted when the constant is declared, not when it is used.

## Example

```php
<?php

class Foo {
    const NAMESPACE = 'bar';
}

echo Foo::NAMESPACE;

?>
```

## Literal Examples
+ Declaring class constant "namespace" is deprecated
+ Declaring interface constant "namespace" is deprecated
+ Declaring enum constant "namespace" is deprecated

## Alternatives
+ Rename the constant to something other than NAMESPACE.

## Related error messages
+ [cannot-use-'namespace'-as-namespace-name](cannot-use-namespace-as-namespace-name.html)
+ [namespace-%s-is-an-invalid-class-name](namespace-%s-is-an-invalid-class-name.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, namespace could be freely used as the name of a class/interface/trait/enum constant. As of PHP 8.6, declaring it emits a deprecation notice, reserving the word for a possible future ::namespace pseudo-constant.](Previously, namespace could be freely used as the name of a class/interface/trait/enum constant. As of PHP 8.6, declaring it emits a deprecation notice, reserving the word for a possible future ::namespace pseudo-constant.)