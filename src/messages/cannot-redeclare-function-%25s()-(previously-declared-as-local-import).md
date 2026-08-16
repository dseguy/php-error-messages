# Cannot redeclare function %s() (previously declared as local import)

## Description
A `use function` statement imports a function under a local name, in the current namespace. When a function is then declared, in the same namespace, under that same local name, and its declared name differs (case insensitively) from the fully qualified imported name, PHP cannot tell which of the import or the local declaration should be used.

This is detected at compile time, as soon as the local function declaration is compiled.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-function-%s()-(previously-declared-as-local-import).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-function-%s()-(previously-declared-as-local-import).html","name":"Cannot redeclare function %s() (previously declared as local import)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 16:19:30 +0000","dateModified":"Wed, 05 Aug 2026 16:19:30 +0000","description":"A ``use function`` statement imports a function under a local name, in the current namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-function-%s()-(previously-declared-as-local-import).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

namespace App;

use function Other\bar;

function bar() {}

?>
```

## Literal Examples
+ Cannot redeclare function bar() (previously declared as local import)

## Alternatives
+ Remove the ``use function`` import, and call the function using its fully qualified name.
+ Alias the import with the ``as`` keyword, so it no longer collides with the local function name.
+ Rename the local function.

## Related error messages
+ [cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)](cannot-redeclare-function-%s\(\)-\(previously-declared-in-%s:%d\).html)
+ [cannot-redeclare-%s()-(previously-declared-in-%s:%d)](cannot-redeclare-%s\(\)-\(previously-declared-in-%s:%d\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()