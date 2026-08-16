# The use statement with non-compound name \'%s\' has no effect

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-use-statement-with-non-compound-name-'%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-use-statement-with-non-compound-name-'%s'.html","name":"The use statement with non-compound name \\'%s\\' has no effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This warning reports a useless ``use`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-use-statement-with-non-compound-name-'%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This warning reports a useless `use` expression. The `use` expression imports the final name of a fully qualified name to be used in the current file. When applying `use` to a simple name, without any `\` separator, PHP does not import it, as it is already treated as such by default.

## Example

```php
<?php

use Some\Space\Functions; // allow Functions to be used in this file
use Closure;              // Closure is already handled that way, no need to import it

function foo(Closure $closure) {}

?>
```

## Alternatives
+ Remove the single name use expressions.
+ Fix the imported name to include a namespace, if applicable.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()