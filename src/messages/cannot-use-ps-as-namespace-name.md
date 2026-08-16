# Cannot use \'%s\' as namespace name

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'%s'-as-namespace-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'%s'-as-namespace-name.html","name":"Cannot use \\'%s\\' as namespace name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``namespace`` keyword is used to declare a namespace, and also to reference the current namespace, when building a name, for a function, a class, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'%s'-as-namespace-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `namespace` keyword is used to declare a namespace, and also to reference the current namespace, when building a name, for a function, a class, etc. As such, it is not possible to use `namespace` as a prefix of the name of a namespace (sic), as it may be confused later with the current namespace. Also, namespaces are case insensitive.

## Example

```php
<?php

namespace Namespace\xyz {}

namespace NAMEspace\xyz {}

// This is OK, as ``namespace`` is not first in the name
namespace Abc\Namespace\Xyz {}

?>
```

## Literal Examples
+ Cannot use "namespace\xyz" as namespace name, due to conflict with ns-relative names

## Alternatives
+ Remove the word namespace in the name of the namespace.
+ Add another prefix before the word namespace in the name of the namespace.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()