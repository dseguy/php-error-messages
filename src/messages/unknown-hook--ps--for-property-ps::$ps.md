# Unknown hook \"%s\" for property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-hook--ps--for-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-hook--ps--for-property-ps::$ps.html","name":"Unknown hook \\\"%s\\\" for property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-04-10T08:49:32+00:00","dateModified":"2026-04-10T08:49:32+00:00","description":"There can be only two property hooks: ``get`` and ``set``, and their case variations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-hook--ps--for-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
There can be only two property hooks: `get` and `set`, and their case variations. All others are currently explicitly forbidden.

## Example

```php
<?php

class Test {
    public $prop {
        foobar {}
    }
}

?>
```

## Literal Examples
+ Unknown hook "foobar" for property Test::$prop

## Alternatives
+ Use one of the valid names.
+ Remove the property hook.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()