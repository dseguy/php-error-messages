# Cannot declare variadic promoted property

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-variadic-promoted-property.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-variadic-promoted-property.html","name":"Cannot declare variadic promoted property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-03T19:27:11+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Properties may be declared, as an parameter in a constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-variadic-promoted-property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Properties may be declared, as an parameter in a constructor. Then, they also act as an parameter, and a local variable.

Variadic option is a parameter only option, which pack all the remaning arguments in the final parameter. 

Variadic option makes no sense in a property definition, as only one value is stored there.

## Example

```php
<?php

class X {
	function __construct(
		private string ...$x
	) {}
}

?>
```

## Alternatives
+ Remove the property definition from the constructor: keep the argument use the variadic, and define the property in the traditional way.
+ Remove the variadic option.

## Related error messages
+ [cannot-redeclare-%s::$%s](cannot-redeclare-%s::$%s.html)
+ [only-the-last-parameter-can-be-variadic](only-the-last-parameter-can-be-variadic.html)
+ [variadic-parameter-cannot-have-a-default-value](variadic-parameter-cannot-have-a-default-value.html)
