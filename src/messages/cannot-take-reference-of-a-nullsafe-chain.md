# Cannot take reference of a nullsafe chain

## Description
The nullsafe operator `?->` short-circuits the whole access chain to `null` as soon as one segment is `null`: the rest of the chain is never evaluated. A reference, on the other hand, must point to a concrete storage location (a variable, array slot, or property); there is no such location to bind to when the chain may short-circuit to a plain `null` value instead.

This error is raised whenever ANY segment of a chain used in a by-reference context contains a nullsafe operator, whether the reference is taken with `&`, passed to a by-reference function or method parameter, or used in a by-reference `foreach`. It is a compile-time error, detected regardless of whether the chain would actually short-circuit at runtime.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-take-reference-of-a-nullsafe-chain.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-take-reference-of-a-nullsafe-chain.html","name":"Cannot take reference of a nullsafe chain","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 14:21:29 +0000","dateModified":"Tue, 04 Aug 2026 14:21:29 +0000","description":"The nullsafe operator ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-take-reference-of-a-nullsafe-chain.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Address {
    public string $city = '';
}

class User {
    public ?Address $address = null;
}

$user = new User();

$city = &$user?->address->city;

?>
```

## Alternatives
+ Use the regular ``->`` operator instead of ``?->``, after making sure the intermediate value cannot be null.
+ Split the expression: check for null first, then take the reference with ``->``.

## Related error messages
+ [can't-use-nullsafe-operator-in-write-context](cant-use-nullsafe-operator-in-write-context.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()