# Cannot use 'namespace' as namespace name

## Description
The namespace `namespace` keyword introduces a namespace. The namespace may have no name, or a name. The only forbidden name is `namespace`, as it is used later to identify the current namespace, when used as the first entry in a fully qualified namespace.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'namespace'-as-namespace-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'namespace'-as-namespace-name.html","name":"Cannot use 'namespace' as namespace name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The namespace ``namespace`` keyword introduces a namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'namespace'-as-namespace-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

namespace Namespace {}

?>
```

## Alternatives
+ Use another name than ``namespace``.
