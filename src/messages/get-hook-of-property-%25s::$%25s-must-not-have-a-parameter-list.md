# get hook of property %s::$%s must not have a parameter list

## Description
The `get` hook property cannot be specified with a parameter list: not with a parameter, nor even with the empty parenthesis.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html","name":"get hook of property %s::$%s must not have a parameter list","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:13:22 +0000","dateModified":"Tue, 04 Aug 2026 19:13:22 +0000","description":"The ``get`` hook property cannot be specified with a parameter list: not with a parameter, nor even with the empty parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    private int $p {
        get($a) => 1;
    }

    private int $q {
        get() => 1;
    }
}


?>
```

## Literal Examples
+ get hook of property X::$p must not have a parameter list

## Alternatives
+ Remove the parenthesis that follows the ``get`` keyword, and their content.

## Related error messages
+ [%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters](%s-hook-of-property-%s::$%s-must-accept-exactly-one-parameters.html)
+ [type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type](type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()