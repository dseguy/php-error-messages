# Default value for property of type int may not be null. Use the nullable type ?int to allow null default value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value.html","name":"Default value for property of type int may not be null. Use the nullable type ?int to allow null default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-06T18:30:06+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"When an argument is typed, and has a null default value, PHP makes it automagically nullable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-property-of-type-int-may-not-be-null.-use-the-nullable-type-?int-to-allow-null-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When an argument is typed, and has a null default value, PHP makes it automagically nullable. That is not the case for properties, which yields this error.

## Example

```php
<?php

class X {
	private int $i = null;
}

function foo(int $i = null) { }

?>
```

## Alternatives
+ Add the nullable type to the type definition.
+ Use another default value, within the current type domain.

## Related error messages
+ [%s():-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead](%s\(\):-implicitly-marking-parameter-$%s-as-nullable-is-deprecated,-the-explicit-nullable-type-must-be-used-instead.html)
