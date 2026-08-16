# Class %s does not have a property named %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-does-not-have-a-property-named-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-does-not-have-a-property-named-%s.html","name":"Class %s does not have a property named %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The reflection extension allows the manipulation of various aspect of existing objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-does-not-have-a-property-named-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The reflection extension allows the manipulation of various aspect of existing objects. Yet, it doesn't allow the assignation of values to non-existing properties, static or not.

## Example

```php
<?php
class X { }

$rc = new ReflectionClass('X');
$rc->setStaticPropertyValue('property', 'value');

?>
```

## Literal Examples
+ Class X does not have a property named property

## Alternatives
+ Make sure the property exists before trying to assign it a value.
+ Make sure the property is static.
