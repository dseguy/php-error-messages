# syntax error, unexpected fully qualified name "%s", expecting "function" or "const"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\"-or-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\"-or-\"const\".html","name":"syntax error, unexpected fully qualified name \"%s\", expecting \"function\" or \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"There should not be any fully qualified name inside the body of a class, enumeration, trait or interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"function\"-or-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
There should not be any fully qualified name inside the body of a class, enumeration, trait or interface. Names are used for methods or constants, or with the `use` expression, to import a trait.

## Example

```php
<?php

class X {
    \A;
}

?>
```

## Alternatives
+ Add the ``use`` keyword before the name to import a trait.
+ Add the ``function`` keyword before the name to make it a method, although there should not be any ``\`` in the method name.
+ Add the ``const`` keyword before the name to make it a constant, although there should not be any ``\`` in the constant name.
+ Add the ``#[`` keyword before the name to make it an attribute.
