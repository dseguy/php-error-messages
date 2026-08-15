# Default value for property of type %s may not be null. Use the nullable type %s to allow null default value

## Description
Typed properties can have a default value, but that default value must match the declared type. `null` is only a valid default when the type is explicitly nullable, written with a leading `?`, such as `?int`.

Without the `?`, a scalar or class type like `int` or `X` does not accept `null`, even as a default value that is never read before being overwritten.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value.html","name":"Default value for property of type %s may not be null. Use the nullable type %s to allow null default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"Typed properties can have a default value, but that default value must match the declared type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X
{
    public int $value = null;
}

?>
```

## Literal Examples
+ Default value for property of type int may not be null. Use the nullable type ?int to allow null default value

## Alternatives
+ Make the property type nullable, for example ``?int`` instead of ``int``.
+ Remove the default value, and initialize the property in the constructor instead.
+ Use a non-null default value that matches the declared type.

## Related error messages
+ [readonly-property-%s::$%s-cannot-have-default-value](asdf)
+ [typed-property-%s::$%s-must-not-be-accessed-before-initialization](asdf)
+ [property-%s::$%s-cannot-have-type-%s](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()