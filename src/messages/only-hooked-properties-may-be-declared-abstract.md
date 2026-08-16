# Only hooked properties may be declared abstract

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-hooked-properties-may-be-declared-abstract.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-hooked-properties-may-be-declared-abstract.html","name":"Only hooked properties may be declared abstract","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:16:01 +0000","dateModified":"Mon, 13 Jul 2026 08:16:01 +0000","description":"Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, ``get`` or ``set`` or both, have no body block","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-hooked-properties-may-be-declared-abstract.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Hooked properties may be declared abstract, as long as the class is also abstract, and that one of the hook, `get` or `set` or both, have no body block.

In previous version, PHP would never allow properties to be abstract.

## Example

```php
<?php

    abstract class X {
        public abstract string $x;
    }

?>
```

## Alternatives
+ Add an identity hook to the class, such as ``get => $this->x`` or ``set => $this->x = $value;``.
+ Remove the abstract keyword.

## Related error messages
+ [abstract-property-%s::$%s-must-specify-at-least-one-abstract-hook](abstract-property-%s::$%s-must-specify-at-least-one-abstract-hook.html)

In previous PHP versions, this error message used to be :ref:`cannot-use-the-abstract-modifier-on-a-property`.