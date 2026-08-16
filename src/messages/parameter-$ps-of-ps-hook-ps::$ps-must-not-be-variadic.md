# Parameter $%s of %s hook %s::$%s must not be variadic

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html","name":"Parameter $%s of %s hook %s::$%s must not be variadic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-26T08:34:03+02:00","dateModified":"2026-07-26T08:34:03+02:00","description":"A ``set`` property hook must accept exactly one, ordinary parameter: the incoming value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-$%s-of-%s-hook-%s::$%s-must-not-be-variadic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A `set` property hook must accept exactly one, ordinary parameter: the incoming value. Declaring it as variadic with `...` does not make sense, since the hook is always called with exactly one value, never with a variable number of arguments.

## Example

```php
<?php

class X
{
    public string $property {
        set(string ...$value) {
            $this->property = implode(',', $value);
        }
    }
}

?>
```

## Literal Examples
+ Parameter $value of set hook X::$property must not be variadic

## Alternatives
+ Remove the ``...`` from the hook's parameter, and declare it as a regular parameter.

## Related error messages
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference](parameter-$%s-of-%s-hook-%s::$%s-must-not-be-pass-by-reference.html)
+ [parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value](parameter-$%s-of-%s-hook-%s::$%s-must-not-have-a-default-value.html)
+ [%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters](%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()