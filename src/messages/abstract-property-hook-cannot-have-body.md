# Abstract property hook cannot have body

## Description
Property hooks, both `set` and `get`, may be made abstract by adding the keyword to the property definition. And, just like methods, abstract property hooks cannot have a body.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-hook-cannot-have-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-hook-cannot-have-body.html","name":"Abstract property hook cannot have body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:31:54 +0000","dateModified":"Mon, 13 Jul 2026 08:31:54 +0000","description":"Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-hook-cannot-have-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public abstract $property {
        get {}
    }
}

?>
```

## Alternatives
+ Remove the abstract keyword.
+ Remove the body of the property hook.

## Related error messages
+ [non-abstract-property-hook-must-have-a-body](non-abstract-property-hook-must-have-a-body.html)
+ [abstract-property-%s::$%s-must-specify-at-least-one-abstract-hook](abstract-property-%s::$%s-must-specify-at-least-one-abstract-hook.html)
