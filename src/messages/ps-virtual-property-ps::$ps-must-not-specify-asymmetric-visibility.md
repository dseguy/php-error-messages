# %s virtual property %s::$%s must not specify asymmetric visibility

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-virtual-property-%s::$%s-must-not-specify-asymmetric-visibility.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-virtual-property-%s::$%s-must-not-specify-asymmetric-visibility.html","name":"%s virtual property %s::$%s must not specify asymmetric visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-15T22:48:05+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-virtual-property-%s::$%s-must-not-specify-asymmetric-visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A virtual property is related to property hooks: it is a property whose hook do not use the underlying property for storage, but uses another one (or, like here, none). 

When the set or get visibility doesn't apply, this error is displayed. The error message may start with `Read-only` or `Write-only`.

## Example

```php
<?php

class X {
	public private(set) int $p {
		set {}
	}
}

class Y {
	public private(set) int $p {
		get {}
	}
}

?>
```

## Literal Examples
+ Write-only virtual property X::$p must not specify asymmetric visibility
+ Readonly-only virtual property Y::$p must not specify asymmetric visibility

## Alternatives
+ Remove the asymmetric visibility from the definition of the property.
+ Remove the property hook from the definition of the property.
+ Remove the virtual property, by making the property hook use the underlying property.
