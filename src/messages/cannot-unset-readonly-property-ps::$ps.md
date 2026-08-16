# Cannot unset readonly property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-readonly-property-%s::$%s.html","name":"Cannot unset readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Once a ``readonly`` property has been set, it cannot be unset","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Once a `readonly` property has been set, it cannot be unset. That would defeat the whoe purpose of `readonly`.

## Example

```php
<?php

class X {
    public readonly $property;
    
    function __construct($a) {
        $this->property = $a;
        unset($this->property);
    }
}

?>
```

## Literal Examples
+ Cannot unset readonly property X::$property

## Alternatives
+ Use clone to create a new object, and have a chance to change that value.
+ Remove the ``unset`` call.
+ Remove the ``readonly`` property.
