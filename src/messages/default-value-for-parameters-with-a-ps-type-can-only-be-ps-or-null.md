# Default value for parameters with a %s type can only be %s or NULL

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-parameters-with-a-ps-type-can-only-be-ps-or-null.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-parameters-with-a-ps-type-can-only-be-ps-or-null.html","name":"Default value for parameters with a %s type can only be %s or NULL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-25T11:42:44+01:00","dateModified":"2026-03-31T11:13:13+02:00","description":"The default value of the parameter is not compatible with the type of the same parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/default-value-for-parameters-with-a-ps-type-can-only-be-ps-or-null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The default value of the parameter is not compatible with the type of the same parameter. In the example here, the parameter `$s` is supposed to be an integer, but has a string as default value.

This error also applies to numeric strings: the default value must be of the same type, without any silent type juggling.

## Example

```php
<?php

function foo(int $s = 's') { }

function bar(int $s = '1') { }

?>
```

## Alternatives
+ Change the type of the parameter.
+ Change the default value.
+ Change the default value to NULL.
+ Remove the default value.
+ Remove the type value.
+ Add a second union type to the parameter.

## Related error messages
+ [cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s](cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html)
+ [cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s](cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s.html)

In more recent PHP versions, this error message is now :ref:`cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s`.