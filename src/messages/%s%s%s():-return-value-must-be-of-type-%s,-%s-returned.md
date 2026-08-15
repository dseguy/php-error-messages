# %s%s%s(): Return value must be of type %s, %s returned

## Description
This error appears when calling a method with a return value, but without an explicit return statement. This means that when the method reachs its end, eventually, it will end without a returned value. Yet, the method signature declares that it will return a specific type.

The error is also emitted for property hooks, in particular the `get` one: its return type is the same as the type of the property.

A different error message is returned when an empty `return` statement is used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s():-return-value-must-be-of-type-%s,-%s-returned.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s():-return-value-must-be-of-type-%s,-%s-returned.html","name":"%s%s%s(): Return value must be of type %s, %s returned","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error appears when calling a method with a return value, but without an explicit return statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s():-return-value-must-be-of-type-%s,-%s-returned.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() : int {}

class X {
    public int $p {
        // The type of the property is the return type of the hook
        get => [$this->p];
    }
}

?>
```

## Literal Examples
+ foo(): Return value must be of type int, none returned

## Alternatives
+ Add a return call, with a valid value.
+ Remove the return type.
+ Add a null to the return type, and return it (void is not possible with another type).

## Related error messages
+ [a-function-with-return-type-must-return-a-value](asdf)
