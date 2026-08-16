# Cannot use anonymous class in constant expression

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-anonymous-class-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-anonymous-class-in-constant-expression.html","name":"Cannot use anonymous class in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-30T10:03:45+02:00","dateModified":"2026-08-04T21:25:09+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-anonymous-class-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.1's "new in initializers" allows object-creation expressions to appear in constant-expression contexts, such as default parameter values, property defaults, static variables, class constants and attribute arguments, as long as the class being instantiated is fixed and unambiguous. An anonymous class is declared and compiled at the exact spot it is written; allowing one inside a shared, deferred context like a property default would raise questions about when and how often it actually gets declared, so it remains disallowed there.

## Example

```php
<?php

class Foo {
	public $bar = new class {};
}

?>
```

## Alternatives
+ Give the class a name, declare it separately, and use new Name(...) in the constant expression instead.

## Related error messages
+ [cannot-use-dynamic-class-name-in-constant-expression](cannot-use-dynamic-class-name-in-constant-expression.html)
+ [static-"-is-not-allowed-in-compile-time-constants](static--is-not-allowed-in-compile-time-constants.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()