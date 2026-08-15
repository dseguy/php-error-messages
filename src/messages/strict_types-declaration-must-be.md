# strict_types declaration must be

## Description
This is the same placement rule documented in full under `strict_types declaration must be the very first statement in the script`: the `declare(strict_types = ...)` pragma changes how the whole file is compiled, so PHP must see it before compiling anything else. Here, the `namespace` statement, itself harmless, is still a statement, and it pushes the `declare()` out of first position.

Only a preceding `declare()` call (for `ticks` or `encoding`) is tolerated before it; any other statement is not.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be.html","name":"strict_types declaration must be","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:02:32 +0000","dateModified":"Wed, 05 Aug 2026 14:02:32 +0000","description":"This is the same placement rule documented in full under ``strict_types declaration must be the very first statement in the script``: the ``declare(strict_types = ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-be.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

namespace App;

declare(strict_types = 1);

?>
```

## Literal Examples
+ strict_types declaration must be the very first statement in the script

## Alternatives
+ Move the ``declare(strict_types = 1)`` statement to be the very first statement in the file.

## Related error messages
+ [strict_types-declaration-must-be-the-very-first-statement-in-the-script](strict\_types-declaration-must-be-the-very-first-statement-in-the-script.html)
+ [strict_types-declaration-must-not](strict\_types-declaration-must-not.html)
+ [strict_types-declaration-must-have-0-or-1-as-its-value](strict\_types-declaration-must-have-0-or-1-as-its-value.html)

In more recent PHP versions, this error message is now :ref:`strict_types-declaration-must-be-the-very-first-statement-in-the-script`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()