# Cannot use \"yield from\" inside a by-reference generator

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--yield-from--inside-a-by-reference-generator.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--yield-from--inside-a-by-reference-generator.html","name":"Cannot use \\\"yield from\\\" inside a by-reference generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"``yield from`` only emit data by value, not by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--yield-from--inside-a-by-reference-generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`yield from` only emit data by value, not by reference.

## Example

```php
<?php

function &foo() {
    yield from [1,2,3];
}

?>
```

## Alternatives
+ Remove the reference sign from the function signature.
+ Refactor the code to use ``yield`` instead.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()