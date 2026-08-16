# Cannot redeclare property hook "%s

## Description
Property hook may only have one definition. It is not possible to have duplicates.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-property-hook--\"%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-property-hook--\"%s.html","name":"Cannot redeclare property hook \"%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:53:09 +0000","dateModified":"Fri, 10 Apr 2026 08:53:09 +0000","description":"Property hook may only have one definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-property-hook--\"%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Test {
    public $prop {
        GeT {}
        get {}
        
    }
}

?>
```

## Literal Examples
+ Cannot redeclare property hook "get"

## Alternatives
+ Remove all but one of the definition.
+ Rename one of them with the other property hook name: may be ``set`` had a typo and was written ``get``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()