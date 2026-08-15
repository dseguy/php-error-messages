# Unsupported operand types

## Description
This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator. 

In the code example, the string 'a4.4a' cannot be converted to an integer or a float. This yield the error. 

PHP could do with '4.4a' (cast to 4.4 and a warning), or with '4.4' (cast to a float silently). 

On the other hand, the 'a4.4a' string cannot be converted to a numeric and it yields the error. Other types, such as an array, an object or a resource would yield the same error. Boolean and null are converted to integers.

This error applies to all operators, with matching constraints. 

Conversion to string my be automatically happening, when the `strict_type` directive is not active. 

The error is reported for the first or the second argument. It may also applies to both, though PHP stops at the first one it finds.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-operand-types.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-operand-types.html","name":"Unsupported operand types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error is emitted when PHP cannot find a reasonable way to use the parameters of an operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unsupported-operand-types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

echo a4.4a ** 4;

?>
```

## Alternatives
+ Use an explicit cast to ensure the correct type of the operand.
+ Check the value before using it with the operator.

## Related error messages
+ [a-non-numeric-value-encountered](a-non-numeric-value-encountered.html)
+ [cannot-perform-bitwise-not-on-%s](cannot-perform-bitwise-not-on-%s.html)
+ [a-non-well-formed-numeric-value-encountered](a-non-well-formed-numeric-value-encountered.html)
