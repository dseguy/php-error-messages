# Cannot use %s as default value for property %s::$%s of type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s.html","name":"Cannot use %s as default value for property %s::$%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-19T11:18:15+01:00","dateModified":"2026-03-31T11:13:13+02:00","description":"The default value of the property is not compatible with the type of the same property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The default value of the property is not compatible with the type of the same property. In the example here, the property `$s` is an integer, but has a string as default value.

This error also applies to numeric strings: the default value must be of the same type, without any silent type juggling.

It used to be recommended to make the default value `NULL` as it would be implicitely accepted by the type. Yet, in PHP 8.4, this is now a deprecated behavior, and it is not recommended anymore.

## Example

```php
<?php

class X {
    public string $property = 3;
}

?>
```

## Literal Examples
+ Cannot use 3 as default value for property X::$property of type string

## Alternatives
+ Change the type of the parameter.
+ Change the default value.
+ Remove the default value.
+ Remove the type value.
+ Add a second union type to the parameter.

## Related error messages
+ [default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null](default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null.html)
+ [cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s](cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html)
