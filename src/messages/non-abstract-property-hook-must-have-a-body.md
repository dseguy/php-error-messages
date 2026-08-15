# Non-abstract property hook must have a body

## Description
Property hooks, both `set` and `get`, may be made abstract by replacing the body block by a semi-colon. And, just like methods, property hooks must use the `abstract` property, although the property definition has to support the option, not the property hook itself.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-abstract-property-hook-must-have-a-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-abstract-property-hook-must-have-a-body.html","name":"Non-abstract property hook must have a body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:32:18 +0000","dateModified":"Mon, 13 Jul 2026 08:32:18 +0000","description":"Property hooks, both ``set`` and ``get``, may be made abstract by replacing the body block by a semi-colon","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-abstract-property-hook-must-have-a-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	// This is an error. A property hook must have a body
    public $property {
        get;
    }

	// This is OK. The property is marked as abstract
    public abstract $abstractProperty {
        get;
    }
}

?>
```

## Alternatives
+ Add a body to the property hook.
+ Add the abstract keyword to the property definition.

## Related error messages
+ [abstract-property-hook-cannot-have-body](asdf)
+ [abstract-property-%s::$%s-must-specify-at-least-one-abstract-hook](asdf)
