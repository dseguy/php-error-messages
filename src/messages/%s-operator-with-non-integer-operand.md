# '%s' operator with non-integer operand

## Description
The `break` and `continue` operators only accept a positive non-null literal integer. 

Beyond the obvious improper code that is `break 1.2`, even storing the number of break levels in a constant or a variable is not a valid syntax. It can only accept an integer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-operator-with-non-integer-operand.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-operator-with-non-integer-operand.html","name":"'%s' operator with non-integer operand","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The ``break`` and ``continue`` operators only accept a positive non-null literal integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-operator-with-non-integer-operand.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

break 1.2;

const A = 1;
break A;

?>
```

## Literal Examples
+ 'break' operator with non-integer operand
+ 'continue' operator with non-integer operand

## Alternatives
+ Round the number to the closest integer.
+ Remove the call to break altogether.
+ Move the loop in a separate method, and use return to break out of the loop.
+ Use a goto to jump out of the loop.

## Related error messages
+ ['%s'-operator-accepts-only-positive-integers](asdf)
