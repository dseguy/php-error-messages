# Returning bool from comparison function is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-bool-from-comparison-function-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-bool-from-comparison-function-is-deprecated.html","name":"Returning bool from comparison function is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The comparison function should return 0, 1 or -1, and not just booleans","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-bool-from-comparison-function-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The comparison function should return 0, 1 or -1, and not just booleans. 1 means that `$a > $b`, -1 that `$a < $b` and 0 means that `$a === $b`. This is a richer information than boolean, and it also fits very well with the spaceship operator `<=>`.

## Example

```php
<?php

function mySort(int $a, int $b) : bool {
    return $a > $b;
}

$array = [1,2,3,4,5,6,7,8,9,10];
usort($array, mySort(...));

?>
```

## Alternatives
+ Set the returntype of the comparison function to int.
+ Use the spaceship operator as possible.
+ Cast the result to integer.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[sortClosureReturnType](sortClosureReturnType)