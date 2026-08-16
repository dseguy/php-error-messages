# Cannot specify default value for virtual hooked property

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-specify-default-value-for-virtual-hooked-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-specify-default-value-for-virtual-hooked-property-%s::$%s.html","name":"Cannot specify default value for virtual hooked property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-10T10:20:31+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"It is possible to create a virtual property, by defining one accessor that doesn't refer to the defined property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-specify-default-value-for-virtual-hooked-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to create a virtual property, by defining one accessor that doesn't refer to the defined property. In the illustration here, the `get` method is empty. In that case, the property's value doesn't have an impact on the operation, and the default value of that property shall not be defined.

## Example

```php
<?php

class X {
	public int $property = 3 {
		get {}
	}
}

?>
```

## Alternatives
+ Remove the property hooks, to regain usage of the default value.
+ Define a property hook that makes use of the property ``$this->property``.
