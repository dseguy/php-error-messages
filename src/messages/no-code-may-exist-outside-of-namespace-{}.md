# No code may exist outside of namespace {}

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-code-may-exist-outside-of-namespace-{}.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-code-may-exist-outside-of-namespace-{}.html","name":"No code may exist outside of namespace {}","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-code-may-exist-outside-of-namespace-{}.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When using a block notation for namespaces, there cannot be any other code outside the namespaced blocks. Here, the function `foo()` is outside the namespace block. 

The error message is not strictly true: the `declare` command may be left out of the namespace, and so does any comments.

## Example

```php
<?php

namespace A {

}

function foo() {}

?>
```

## Alternatives
+ Move all the code inside a namespace block.
+ For global namespace, use the ``namespace {...}`` command without a name.
+ Switch to the namespace command without block: all the code will be in that namespace, until the next namespace command.

## Related error messages
+ [cannot-mix-bracketed-namespace-declarations](cannot-mix-bracketed-namespace-declarations.html)
+ [namespace-declaration-statement-has-to-be](namespace-declaration-statement-has-to-be.html)
