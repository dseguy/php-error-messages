# syntax error, unexpected namespaced name "%s", expecting "function"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-namespaced-name-\"%s\",-expecting-\"function\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-namespaced-name-\"%s\",-expecting-\"function\".html","name":"syntax error, unexpected namespaced name \"%s\", expecting \"function\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"A namespaced name is an identifier with at least one backslash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-namespaced-name-\"%s\",-expecting-\"function\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A namespaced name is an identifier with at least one backslash. The body of a class, enumeration, trait or interface does not use any namespaces, as it declares methods, constants and proeprties. There may be namespaced names in a `use` declaration, but such expression starts with a keyword.

## Example

```php
<?php

class X {

A\B;

C\D($e);

}

?>
```

## Literal Examples
+ syntax error, unexpected namespaced name "A\B", expecting "function\

## Alternatives
+ Add the ``use`` keyword before the name to import a trait.
+ Add the ``function`` keyword before the name to make it a method, although there should not be any ``\`` in the method name.
+ Add the ``const`` keyword before the name to make it a constant, although there should not be any ``\`` in the constant name.
+ Add the ``#[`` keyword before the name to make it an attribute.

## Related error messages
+ [syntax-error,-unexpected-fully-qualified-name-"%s",-expecting-"function"](syntax-error,-unexpected-fully-qualified-name-%s,-expecting-function.html)
