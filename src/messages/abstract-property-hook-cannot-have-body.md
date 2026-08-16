# Abstract property hook cannot have body

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-hook-cannot-have-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-hook-cannot-have-body.html","name":"Abstract property hook cannot have body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-26T09:24:47+02:00","dateModified":"2026-07-13T11:03:18+02:00","description":"Property hooks, both ``set`` and ``get``, may be made abstract by adding the keyword to the property definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-hook-cannot-have-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Property hooks, both `set` and `get`, may be made abstract by adding the keyword to the property definition. And, just like methods, abstract property hooks cannot have a body.

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
