# Static property may not have asymmetric visibility

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-property-may-not-have-asymmetric-visibility.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-property-may-not-have-asymmetric-visibility.html","name":"Static property may not have asymmetric visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Asymmetric visibility is only applicable to object properties, not static properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-property-may-not-have-asymmetric-visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Asymmetric visibility is only applicable to object properties, not static properties.

## Example

```php
<?php
class X {
    static private(set) $p = 1;
}
?>
```

## Alternatives
+ Make the property non-static.
+ Remove the asymmetric visibility.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()