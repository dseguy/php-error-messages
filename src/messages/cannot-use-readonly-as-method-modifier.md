# Cannot use 'readonly' as method modifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-readonly-as-method-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-readonly-as-method-modifier.html","name":"Cannot use 'readonly' as method modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-03-17T17:03:30+01:00","dateModified":"2025-07-04T15:29:49+02:00","description":"``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-readonly-as-method-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`readonly` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties.

## Example

```php
<?php

class X {
	private readonly function foo() {}
}

?>
```

## Alternatives
+ Remove the option from the method signature.

## Related error messages
+ [cannot-use-'abstract'-as-method-modifier](cannot-use-abstract-as-method-modifier.html)
+ [cannot-use-'final'-as-method-modifier](cannot-use-final-as-method-modifier.html)
+ [cannot-use-'static'-as-method-modifier](cannot-use-static-as-method-modifier.html)
+ [cannot-use-"abstract"-as-method-modifier-in-trait-alias](cannot-use-abstract-as-method-modifier-in-trait-alias.html)
