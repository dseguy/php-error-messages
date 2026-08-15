# Cannot specify default value for virtual hooked property

## Description
It is possible to create a virtual property, by defining one accessor that doesn't refer to the defined property. In the illustration here, the `get` method is empty. In that case, the property's value doesn't have an impact on the operation, and the default value of that property shall not be defined.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-specify-default-value-for-virtual-hooked-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-specify-default-value-for-virtual-hooked-property-%s::$%s.html","name":"Cannot specify default value for virtual hooked property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is possible to create a virtual property, by defining one accessor that doesn't refer to the defined property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-specify-default-value-for-virtual-hooked-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
