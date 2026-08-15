# Can't use function return value in write context

## Description
A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar. A function call only produces a value; it does not designate a storage location, so the engine has nothing to write to, unset, or reference, and rejects the call outright at compile time, before it is ever executed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-use-function-return-value-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-use-function-return-value-in-write-context.html","name":"Can't use function return value in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:42:25 +0000","dateModified":"Thu, 30 Jul 2026 07:42:25 +0000","description":"A write context is any position that needs an actual variable slot to write to, remove, or bind a reference to: the left side of an assignment, the target of unset(), a foreach-by-reference variable, and similar","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-use-function-return-value-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function getValue() {
	return 5;
}

getValue() = 3;

unset(getValue());

?>
```

## Alternatives
+ Store the return value in a variable first, then use the variable in the write context: $v = getValue(); unset($v);

## Related error messages
+ [can't-use-method-return-value-in-write-context](cant-use-method-return-value-in-write-context.html)
+ [cannot-use-result-of-built-in-function-in-write-context](cannot-use-result-of-built-in-function-in-write-context.html)
+ [can't-use-nullsafe-operator-in-write-context](cant-use-nullsafe-operator-in-write-context.html)
+ [cannot-use-temporary-expression-in-write-context](cannot-use-temporary-expression-in-write-context.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()