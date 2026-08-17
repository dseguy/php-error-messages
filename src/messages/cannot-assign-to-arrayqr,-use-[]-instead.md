# Cannot assign to array(), use [] instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-to-arrayqr,-use-[]-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-to-arrayqr,-use-[]-instead.html","name":"Cannot assign to array(), use [] instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-30T10:03:45+02:00","dateModified":"2026-07-30T10:03:45+02:00","description":"array(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-to-arrayqr,-use-[]-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
array(...) is a language construct that builds a new array value; it does not designate a destructurable container the way list(...) or the short [...] syntax do, so it can never appear on the left-hand side of an assignment. This dedicated error exists to catch the common mistake of typing array(...) where list(...) was meant, and points directly to the short-syntax alternative.

## Example

```php
<?php

$data = [1, 2];
array($a, $b) = $data;

?>
```

## Alternatives
+ Use list(): list($a, $b) = $data;
+ Use the short destructuring syntax: [$a, $b] = $data;

## Related error messages
+ [cannot-mix-[]-and-list()](cannot-mix-\[\]-and-list\(\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()