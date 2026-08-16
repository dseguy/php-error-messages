# Parameter $%s of %s hook %s::$%s must not have a default value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html","name":"Parameter $%s of %s hook %s::$%s must not have a default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-26T08:34:03+02:00","dateModified":"2026-07-26T08:34:03+02:00","description":"The parameter of a ``set`` property hook cannot declare a default value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The parameter of a `set` property hook cannot declare a default value. The hook is always invoked with the value being assigned to the property, so a default value would never actually be used, and PHP rejects it as meaningless.

## Example

```php
<?php

class X
{
    public string $property {
        set(string $value = 'default') {
            $this->property = $value;
        }
    }
}

?>
```

## Literal Examples
+ Parameter $value of set hook X::$property must not have a default value

## Alternatives
+ Remove the default value from the hook's parameter.
+ If a fallback value is needed, assign a default to the property itself, or handle it inside the hook's body.

## Related error messages
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference](parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html)
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic](parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html)
+ [%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters](%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()