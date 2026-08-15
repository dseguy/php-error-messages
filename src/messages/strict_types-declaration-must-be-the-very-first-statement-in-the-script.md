# strict_types declaration must be the very first statement in the script

## Description
This error appears when the declare statement is not the first statement in the file. 

It appears even when non-executing statement are placed before it, such as forgotten characters before the opening tag, any kind of operations in PHP commands, including definitions, namespaces, etc.

Other declare() calls may appears before the strict_types one, though. Also, PHP uses this error with the other declare statement, such as `ticks` or `encoding`. They are very rare though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html","name":"strict_types declaration must be the very first statement in the script","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"This error appears when the declare statement is not the first statement in the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be-the-very-first-statement-in-the-script.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [strict_types-declaration-must-be](asdf)
+ [declare(%s)-value-must-be-a-literal](asdf)
+ [encoding-declaration-pragma-must-be](asdf)
+ [namespace-declaration-statement-has-to-be](asdf)
+ [strict_types-declaration-must-have-0-or-1-as-its-value](asdf)
+ [strict_types-declaration-must-not](asdf)
