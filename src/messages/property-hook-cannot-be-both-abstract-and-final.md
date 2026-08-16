# Property hook cannot be both abstract and final

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-final.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-final.html","name":"Property hook cannot be both abstract and final","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-07T22:26:09+01:00","dateModified":"2025-11-18T06:36:11+01:00","description":"This error is emitted when a property is defined in an interface, with the final option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-final.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when a property is defined in an interface, with the final option. There, a property hook is automatically abstract, as it is part of an interface, so the `abstract` option is understated. 

In a class or a trait, the reported error is that `abstract` is not allowed on a property hook.

## Example

```php
<?php

interface I {
    public int $p {
        final get;
    }
}

?>
```

## Alternatives
+ Remove the ``final`` option from the property hook.

## Related error messages
+ [cannot-use-the-abstract-modifier-on-a-property-hook](cannot-use-the-abstract-modifier-on-a-property-hook.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()