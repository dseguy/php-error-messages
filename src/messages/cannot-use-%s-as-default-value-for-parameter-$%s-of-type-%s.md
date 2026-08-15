# Cannot use %s as default value for parameter $%s of type %s

## Description
The default value of the parameter is not compatible with the type of the parameter. In the example here, the parameter `$s` is an integer, but has a string as default value.

This error also applies to numeric strings: the default value must be of the same type, without any silent type juggling.

It used to be recommended to make the default value `NULL` as it would be implicitely accepted by the type. Yet, in PHP 8.4, this is now a deprecated behavior, and it is not recommended anymore.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html","name":"Cannot use %s as default value for parameter $%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The default value of the parameter is not compatible with the type of the parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-%s-as-default-value-for-parameter-$%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo(int $s = 's') { }

function bar(int $s = '1') { }

?>
```

## Literal Examples
+ Cannot use 3 as default value for parameter $a of type array

## Alternatives
+ Change the type of the parameter.
+ Change the default value.
+ Remove the default value.
+ Remove the type value.
+ Add a second union type to the parameter.

## Related error messages
+ [default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null](asdf)
+ [cannot-use-%s-as-default-value-for-property-%s::$%s-of-type-%s](asdf)

In previous PHP versions, this error message used to be :ref:`default-value-for-parameters-with-a-%s-type-can-only-be-%s-or-null`.