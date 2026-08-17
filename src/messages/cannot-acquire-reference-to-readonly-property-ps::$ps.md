# Cannot acquire reference to readonly property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-acquire-reference-to-readonly-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-acquire-reference-to-readonly-property-ps::$ps.html","name":"Cannot acquire reference to readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-20T12:08:21+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"It is not possible to create a reference to a readonly property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-acquire-reference-to-readonly-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to create a reference to a readonly property. The property is readonly and cannot be changed. On the other hand, references are never readonly, and provide read and write access to the data. PHP has no way to check that the reference is readonly. Hence, references on readonly properties are not allowed.

## Example

```php
<?php

class Test {
    public readonly int $property;

    public function init() {
        $this->property = 1;
    }
}

$test = new Test;
$test->init();

try {
    foreach ($test as &$property) {}
} catch (Error $e) {
    echo $e->getMessage(), \n;
}

?>
```

## Literal Examples
+ Cannot acquire reference to readonly property Test::$property

## Alternatives
+ Remove the readonly option on the property.
+ Remove the reference to the property.
