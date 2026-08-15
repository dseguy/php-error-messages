# Creation of dynamic property %s::$%s is deprecated

## Description
When PHP uses an undefined property for a writing access, it used to create that property on the fly. The property is created with public visibility, not type nor default value. 

Since PHP 8.2, this is a deprecated feature. In a later version, by default, dynamic properties will be forbidden, and activated case by case, using sdtClass or the `#[AllowDynamicProperties]` attribute.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creation-of-dynamic-property-%s::$%s-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creation-of-dynamic-property-%s::$%s-is-deprecated.html","name":"Creation of dynamic property %s::$%s is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When PHP uses an undefined property for a writing access, it used to create that property on the fly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creation-of-dynamic-property-%s::$%s-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public $property = 1;
}

$x = new X;
$x->property = 2;
// This is a dynamic property
$x->other = 3;

?>
```

## Alternatives
+ Declare the property in the class definition.
+ Create an array and store the properties there.
+ Create a stdClass object and store the properties there.
+ Add the ``#[AllowDynamicProperties]``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[dynamicProperties](dynamicProperties)