# Cannot indirectly modify readonly property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-indirectly-modify-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-indirectly-modify-readonly-property-%s::$%s.html","name":"Cannot indirectly modify readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A readonly property cannot be changed after it was set","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-indirectly-modify-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A readonly property cannot be changed after it was set. This includes trying to reach the property via a reference.

## Example

```php
<?php

class X {
    readonly public string $property;

    public function __construct() {
        $this->property = 'A';
    }
}

$object = new X;
$variable =& $object->property;

class Y {
    public funciton __construct(
        readonly int &$y
    ) {}
}

?>
```

## Literal Examples
+ Cannot indirectly modify readonly property X::$property

## Alternatives
+ Do not create a reference to a readonly property.
+ Do not create a referenced parameter with a promoted property.
