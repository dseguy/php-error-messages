# Variadic placeholder must be last

## Description
The ... placeholder used for partial function application (PHP 8.5) introduces the parameters of the resulting Closure, made of every parameter of the original function that was not already given a fixed value. Because everything before it is treated as a fixed, bound argument, the placeholder itself must come last in the call; PHP has no way to bind arguments positioned after it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-placeholder-must-be-last.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-placeholder-must-be-last.html","name":"Variadic placeholder must be last","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:57 +0000","dateModified":"Thu, 30 Jul 2026 07:30:57 +0000","description":"The ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-placeholder-must-be-last.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function add($a, $b, $c) {
	return $a + $b + $c;
}

$curried = add(..., 2, 3);

?>
```

## Alternatives
+ Put every fixed argument before ..., and keep ... as the final argument: add(1, 2, ...).

## Related error messages
+ [variadic-placeholder-may-only-appear-once](variadic-placeholder-may-only-appear-once.html)
+ [cannot-combine-partial-application-and-unpacking](cannot-combine-partial-application-and-unpacking.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()