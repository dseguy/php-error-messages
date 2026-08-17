# Indirect modification of overloaded element of %s has no effect

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-overloaded-element-of-ps-has-no-effect.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-overloaded-element-of-ps-has-no-effect.html","name":"Indirect modification of overloaded element of %s has no effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-04-22T22:09:56+02:00","dateModified":"2026-03-31T11:13:13+02:00","description":"The variable ``$object`` is an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-overloaded-element-of-ps-has-no-effect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The variable `$object` is an object. Since it implements the ArrayAccess interface, it may also use the array syntax, for example with the brackets and index. 

While the syntax makes $object looks like an array, not all operations are available. It is possible to get an index's value, or to give it a new value; but it is not possible to use the increment or decrement operators : those are both a get and a set, and this is not supported by the ArrayAccess interface.

Here, the notion of 'overloaded' applies to the object properties: they are not data containers, as usual, but replaced (overloaded) with method calls. 

There are different variations of that situation : for example, an append on the value at an index is not possible either. In fact, the interface returns a value (not a reference), and the append applies to a value, that is not linked the original array. 

Besides the ArrayAccess, there are several native PHP classes that triggers these warning: ArrayObject, ArrayIterator, PDORow or ArrayAccessImpl.

## Example

```php
<?php
class ObjectOne implements ArrayAccess {
    function offsetGet($index): mixed {
        echo __METHOD__ . "($index)\n";
        return 2;
    }

    function offsetExists($index): bool { return true; /**/ }
    function offsetSet($index, $newval): void { /**/ }
    function offsetUnset($index): void { /**/ }
}

$object = new ObjectOne;

$object[2]++;
$object[2][3] = 2;

?>
```

## Literal Examples
+ Indirect modification of overloaded element of $object has no effect

## Alternatives
+ Use an actual array to handle those edge cases.
+ Write the ObjectOne class to handle these operation with a method call.

## Related error messages
+ [indirect-modification-of-overloaded-property-%s::$%s-has-no-effect](indirect-modification-of-overloaded-property-%s::$%s-has-no-effect.html)
