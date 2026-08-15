# Variadic placeholder may only appear once

## Description
The ... placeholder used for partial function application (PHP 8.5) stands for all of the function's remaining, not-yet-supplied parameters, which become the parameters of the resulting Closure. Using it more than once in the same call is ambiguous, since there is only one set of "remaining parameters" to represent, so PHP allows at most one placeholder per call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-placeholder-may-only-appear-once.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-placeholder-may-only-appear-once.html","name":"Variadic placeholder may only appear once","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:53 +0000","dateModified":"Thu, 30 Jul 2026 07:30:53 +0000","description":"The ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/variadic-placeholder-may-only-appear-once.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function add($a, $b, $c) {
	return $a + $b + $c;
}

$curried = add(..., ...);

?>
```

## Alternatives
+ Use a single ... placeholder per call; wrap the result in an extra closure for any additional free parameters.

## Related error messages
+ [variadic-placeholder-must-be-last](asdf)
+ [cannot-combine-partial-application-and-unpacking](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()