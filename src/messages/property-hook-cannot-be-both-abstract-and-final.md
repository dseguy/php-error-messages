# Property hook cannot be both abstract and final

## Description
This error is emitted when a property is defined in an interface, with the final option. There, a property hook is automatically abstract, as it is part of an interface, so the `abstract` option is understated. 

In a class or a trait, the reported error is that `abstract` is not allowed on a property hook.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-final.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-final.html","name":"Property hook cannot be both abstract and final","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is emitted when a property is defined in an interface, with the final option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-hook-cannot-be-both-abstract-and-final.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [cannot-use-the-abstract-modifier-on-a-property-hook](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()