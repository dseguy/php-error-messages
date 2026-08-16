# Cannot %s readonly property %s::$%s from %s%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-%s-readonly-property-%s::$%s-from-%s%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-%s-readonly-property-%s::$%s-from-%s%s.html","name":"Cannot %s readonly property %s::$%s from %s%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-23T12:17:13+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-%s-readonly-property-%s::$%s-from-%s%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 8.4, the assignation (first and final), of a readonly property had to be executed in the definition class. In the illustration, this means that `$property` must be assigned in the `X` class. This was applied all the time, without consideration for the visibility of the property.

Since PHP 8.4, visibility allowing, a readonly property may be defined in any of the child classes too.

## Example

```php
<?php

class X {
	public readonly int $property;
}

class Y extends X {
    function __construct() {
        $this->property = 5;
    }
}

$x = new Y;
echo $x->property;

?>
```

## Literal Examples
+ Cannot initialize readonly property X::$property from scope Y
+ Cannot initialize readonly property X::$property from global scope

## Alternatives
+ Upgrade to PHP 8.4.
+ Remove the readonly option.
