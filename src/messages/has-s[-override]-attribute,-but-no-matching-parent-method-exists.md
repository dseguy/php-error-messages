# has #[\Override] attribute, but no matching parent method exists

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/has-#[-override]-attribute,-but-no-matching-parent-method-exists.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/has-#[-override]-attribute,-but-no-matching-parent-method-exists.html","name":"has #[\\Override] attribute, but no matching parent method exists","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-21T14:02:06-05:00","dateModified":"2026-08-06T15:27:15+02:00","description":"``Override`` is a PHP attribute, that checks if a method is actually overriding the same method from a parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/has-#[-override]-attribute,-but-no-matching-parent-method-exists.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Override` is a PHP attribute, that checks if a method is actually overriding the same method from a parent class. This means that there should be a method in one of the parent class, that have the same name.

When no such method is found, it signals that the method with the attribute is now orphaned. It should be renamed, to fit another method.

The error is emitted when a method has the Override but no such method exists in the parent; it is also emitted when Override is used in a class or an interface that has no parent. No error is emitted on traits or enums. 

This error is a compile time error, when PHP can solve it at compile time: this means both the class with the Override attribute, and the parent class is available at compile time. It is also an execution time error, when the Override is set in a method in a trait.

## Example

```php
<?php

#[Attribute]
class X {}

class Y extends X {
	#[Override]
	function foo() {}
}

?>
```

## Alternatives
+ Remove the Override attribute.
+ Rename the current method with the name of a method in the parents.
+ Remove the method.
+ Rename one of the parent method to use the name of the current method.

## Related error messages
+ [%s::$%s-has-#[--override]-attribute](%s::$%s-has-#\[--override\]-attribute.html)
+ [%s::%s-has-#[--override]-attribute](%s::%s-has-#\[--override\]-attribute.html)
