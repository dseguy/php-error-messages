# Cannot use 'abstract' as constant modifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'abstract'-as-constant-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'abstract'-as-constant-modifier.html","name":"Cannot use 'abstract' as constant modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-02T10:36:09+01:00","dateModified":"2025-10-19T12:33:32+02:00","description":"``abstract`` is an option for methods, and it is not available for class constants, properties or enumeration cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'abstract'-as-constant-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`abstract` is an option for methods, and it is not available for class constants, properties or enumeration cases.

## Example

```php
<?php

class X {
	private static const A  = 1;
}

?>
```

## Alternatives
+ Remove the option from the constant signature.

In more recent PHP versions, this error message is now :ref:`cannot-use-the-%s-modifier-on-a-%s`.