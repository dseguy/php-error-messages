# Indirect modification of overloaded property %s::$%s has no effect

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-overloaded-property-ps::$ps-has-no-effect.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-overloaded-property-ps::$ps-has-no-effect.html","name":"Indirect modification of overloaded property %s::$%s has no effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-04-22T22:09:56+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The variable $object is an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-overloaded-property-ps::$ps-has-no-effect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The variable $object is an object. Since it implements the __get magic method, any property is available. 

While the syntax makes $object->something looks like a actual property and an array, not all operations are available. It is possible to get any property's value, or to give it a new value; but it is not possible to use the append operator : this is not supported by the magic method.

There are different variations of that situation : for example, an increment or decrement on the value on a property is not possible either. 

There is no call that will relay to the magic method that this property is being appended or incremented.

## Example

```php
<?php
class OneObject {
    function __get($var) { }
}
$object = new OneObject;
$object->something[] = 'bar';
?>
```

## Literal Examples
+ Indirect modification of overloaded property OneObject::$something has no effect

## Alternatives
+ Use an actual data container to represent a property.

## Related error messages
+ [indirect-modification-of-overloaded-element-of-%s-has-no-effect](indirect-modification-of-overloaded-element-of-%s-has-no-effect.html)
