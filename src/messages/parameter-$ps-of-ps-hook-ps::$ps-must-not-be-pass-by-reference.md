# Parameter $%s of %s hook %s::$%s must not be pass-by-reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html","name":"Parameter $%s of %s hook %s::$%s must not be pass-by-reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"The parameter of a ``set`` property hook receives the value being assigned to the property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The parameter of a `set` property hook receives the value being assigned to the property. It cannot be declared as pass-by-reference with a leading `&`, since a property hook is not meant to modify the caller's variable; it only reacts to, or transforms, the value on its way into the property.

## Example

```php
<?php

class X
{
    public string $property {
        set(&$value) {
            $this->property = $value;
        }
    }
}

?>
```

## Literal Examples
+ Parameter $value of set hook X::$property must not be pass-by-reference

## Alternatives
+ Remove the ``&`` from the hook's parameter.

## Related error messages
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic](parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html)
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value](parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html)
+ [%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters](%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()