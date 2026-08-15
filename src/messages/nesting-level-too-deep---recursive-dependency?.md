# Nesting level too deep - recursive dependency?

## Description
PHP comparison may be recursive: it happens when an array contains a reference to another element of itself. In that case, the array becomes recursive: traversing such array may end up with an infinite loop, as the reference may loop back on itself.

This error message applies to array comparisons, and count(). There might be other situations where this applies.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/nesting-level-too-deep---recursive-dependency?.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/nesting-level-too-deep---recursive-dependency?.html","name":"Nesting level too deep - recursive dependency?","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP comparison may be recursive: it happens when an array contains a reference to another element of itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/nesting-level-too-deep---recursive-dependency?.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = [1, 5=> &$a];
$b = [1, 5=> &$b];

try {
    var_dump($a === $b);
} catch (Error $e) {
    print caught\n;
}

// count() doesn't handle recursive arrays
count($a);

?>
```

## Alternatives
+ Do not make direct comparisons of recursive arrays.
+ Do not try to count recursive arrays.
