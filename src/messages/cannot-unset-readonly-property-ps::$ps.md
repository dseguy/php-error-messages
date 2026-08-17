# Cannot unset readonly property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-readonly-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-readonly-property-ps::$ps.html","name":"Cannot unset readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-21T14:02:06-05:00","dateModified":"2025-02-23T09:24:54-05:00","description":"Once a ``readonly`` property has been set, it cannot be unset","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-readonly-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
