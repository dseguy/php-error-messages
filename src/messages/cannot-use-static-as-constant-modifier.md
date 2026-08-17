# Cannot use 'static' as constant modifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-static-as-constant-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-static-as-constant-modifier.html","name":"Cannot use 'static' as constant modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-02T10:36:09+01:00","dateModified":"2025-04-14T22:19:52+02:00","description":"``static`` is an option for properties and methods, and it is not available for class constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-static-as-constant-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`static` is an option for properties and methods, and it is not available for class constants. A class constant is reachable with the name of the class: as such, it behaves like a `static` class constant by definition: there are not object's constants.

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