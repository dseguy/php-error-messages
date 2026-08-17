# Can't use method return value in write context

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cant-use-method-return-value-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cant-use-method-return-value-in-write-context.html","name":"Can't use method return value in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-30T10:03:45+02:00","dateModified":"2026-07-30T10:03:45+02:00","description":"A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cant-use-method-return-value-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar. This is the same restriction as for plain function calls, reported with a distinct message because the engine recognizes method calls (instance calls with ->, and static calls with ::) as a separate kind of AST node from ordinary function calls. A method call only produces a value; it does not designate a storage location, so it is rejected at compile time, before the method is ever invoked.

## Example

```php
<?php

class Foo {
	public function getValue() {
		return 5;
	}
}

(new Foo())->getValue() = 3;

unset((new Foo())->getValue());

?>
```

## Alternatives
+ Store the return value in a variable first, then use the variable in the write context: $v = (new Foo())->getValue(); unset($v);

## Related error messages
+ [can't-use-function-return-value-in-write-context](cant-use-function-return-value-in-write-context.html)
+ [cannot-use-result-of-built-in-function-in-write-context](cannot-use-result-of-built-in-function-in-write-context.html)
+ [can't-use-nullsafe-operator-in-write-context](cant-use-nullsafe-operator-in-write-context.html)
+ [cannot-use-temporary-expression-in-write-context](cannot-use-temporary-expression-in-write-context.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()