# '%s' operator accepts only positive integers

## Description
The `break` and `continue` operators only accepts a positive integer as explicit operand. 

`break` and `continue` exit from the current loop. By default, it only exits the current loop; when a higher number is passed, they also exit the next loops. 

It makes no sense to exit 0 loops (no need for `break` then), or a negative number of loop (call a new `foreach`). Break only works with literal integers, and doesn't compile otherwise.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-operator-accepts-only-positive-integers.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-operator-accepts-only-positive-integers.html","name":"'%s' operator accepts only positive integers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The ``break`` and ``continue`` operators only accepts a positive integer as explicit operand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-operator-accepts-only-positive-integers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

break 1.2;

continue -1;

?>
```

## Literal Examples
+ 'break' operator accepts only positive integers
+ 'continue' operator accepts only positive integers

## Alternatives
+ Round the number to the closest integer.
+ Remove the call to break altogether.
+ Move the loop in a separate method, and use return to break out of the loop.
+ Use a goto to jump out of the loop.

## Related error messages
+ ['%s'-operator-with-non-integer-operand](%s-operator-with-non-integer-operand.html)
