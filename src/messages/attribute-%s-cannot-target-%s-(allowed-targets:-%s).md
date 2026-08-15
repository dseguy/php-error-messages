# Attribute "%s" cannot target %s (allowed targets: %s)

## Description
Attributes are built with a specific target, and may not be applicable to any structure. For example, the native `ReturnTypeWillChange` targets only methods, and not properties.

With a custom structure, the error is shown when requesting an instance of the attribute. Otherwise, this error remains silent, and the structure may be used without error.

With a PHP native attribute, the engine decides when it makes use of it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attribute-\"%s\"-cannot-target-%s-(allowed-targets:-%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attribute-\"%s\"-cannot-target-%s-(allowed-targets:-%s).html","name":"Attribute \"%s\" cannot target %s (allowed targets: %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"Attributes are built with a specific target, and may not be applicable to any structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attribute-\"%s\"-cannot-target-%s-(allowed-targets:-%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// example with a native PHP attribute
class Foo
{
    #[ReturnTypeWillChange]
    public int $bar;
}

#[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD)]
class X { }

// the object is created. It may be used without error.
$ref = new ReflectionObject(new #[X] class() { });
$attr = $ref->getAttributes()[0];

try {
    $attr->newInstance();
} catch (\Throwable $e) {
    print $e->getMessage();
}

?>
```

## Alternatives
+ Remove the attribute restrictions.
+ Update the attribute to target the requested feature.
+ Remove the attribute from the forbidden feature.
+ Create another the attribute for the feature.
