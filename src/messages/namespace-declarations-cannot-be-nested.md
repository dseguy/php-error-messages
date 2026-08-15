# Namespace declarations cannot be nested

## Description
Namespace declaration, with blocks, cannot be nested one into the other. Namespaces must be one next to each other. 

Usually, there is only one namespace per file, without a block.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-declarations-cannot-be-nested.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-declarations-cannot-be-nested.html","name":"Namespace declarations cannot be nested","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Namespace declaration, with blocks, cannot be nested one into the other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-declarations-cannot-be-nested.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

namespace A {
    namespace B {
    
    }
}

?>
```

## Alternatives
+ Make the namespaces next to each other; concatenate the names to create deep namespaces: ``namespace A\B {..}``.
+ Split the code into several files, each with only one namespace.

## Related error messages
+ [cannot-mix-bracketed-namespace-declarations](asdf)
