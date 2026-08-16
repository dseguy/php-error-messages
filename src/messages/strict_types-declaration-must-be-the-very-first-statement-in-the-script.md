# strict_types declaration must be the very first statement in the script

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html","name":"strict_types declaration must be the very first statement in the script","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-05-09T11:40:08+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"This error appears when the declare statement is not the first statement in the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when the declare statement is not the first statement in the file. 

It appears even when non-executing statement are placed before it, such as forgotten characters before the opening tag, any kind of operations in PHP commands, including definitions, namespaces, etc.

Other declare() calls may appears before the strict_types one, though. Also, PHP uses this error with the other declare statement, such as `ticks` or `encoding`. They are very rare though.

## Example

```php
Here<?php

$a = 1;
declare(strict_types = 1);

?>
```

## Alternatives
+ Check if any characters are left before the opening PHP tag.
+ Move the declare after the PHP opening tag.

## Related error messages
+ [strict_types-declaration-must-be](strict\_types-declaration-must-be.html)
+ [declare(%s)-value-must-be-a-literal](declare\(%s\)-value-must-be-a-literal.html)
+ [encoding-declaration-pragma-must-be](encoding-declaration-pragma-must-be.html)
+ [namespace-declaration-statement-has-to-be](namespace-declaration-statement-has-to-be.html)
+ [strict_types-declaration-must-have-0-or-1-as-its-value](strict\_types-declaration-must-have-0-or-1-as-its-value.html)
+ [strict_types-declaration-must-not](strict\_types-declaration-must-not.html)
