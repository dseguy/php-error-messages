# %s hook of property %s::$%s must accept exactly one parameters

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-hook-of-property-ps::$ps-must-accept-exactly-one-parameters.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-hook-of-property-ps::$ps-must-accept-exactly-one-parameters.html","name":"%s hook of property %s::$%s must accept exactly one parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-26T08:34:03+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"When the ``set`` hook of a property is declared with an explicit parameter list, that list must contain exactly one parameter: the value being assigned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-hook-of-property-ps::$ps-must-accept-exactly-one-parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When the `set` hook of a property is declared with an explicit parameter list, that list must contain exactly one parameter: the value being assigned. Declaring zero, two, or more parameters is not allowed.

This is different from omitting the parenthesis altogether, in which case the hook implicitly receives the value through a variable named `$value`.

## Example

```php
<?php

class X
{
    public string $property {
        set($a, $b) {
            $this->property = $a;
        }
    }
}

?>
```

## Literal Examples
+ set hook of property X::$property must accept exactly one parameters

## Alternatives
+ Keep only one parameter in the hook's parameter list.
+ Remove the parameter list entirely and use the implicit ``$value`` variable instead.

## Related error messages
+ [get-hook-of-property-%s::$%s-must-not-have-a-parameter-list](get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html)
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic](parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html)
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value](parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html)
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference](parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()