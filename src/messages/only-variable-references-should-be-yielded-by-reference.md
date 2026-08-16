# Only variable references should be yielded by reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variable-references-should-be-yielded-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variable-references-should-be-yielded-by-reference.html","name":"Only variable references should be yielded by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-02-15T17:03:35-05:00","dateModified":"2025-02-16T12:47:22-05:00","description":"With the ``&`` option in the signature, a generator is yielding values by reference, and not by value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variable-references-should-be-yielded-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
With the `&` option in the signature, a generator is yielding values by reference, and not by value. This way, literal values cannot be yielded: they must be stored in a variable or property first.

## Example

```php
<?php

function &gen() {
    yield foo;
}

$gen = gen();
var_dump($gen->current());

?>
```

## Alternatives
+ Store the literal in a variable and yield the variable.
+ Remove the & in the method signature.
