# The float-string "%s" is not representable as an int, cast occurred

## Description
The string contains a numeric value, that could be parsed, even partially. Yet, the resulting number is bigger than the larger supported integer `PHP_INT_MAX`. At that point, PHP replace the parse numeric value to the maximum integer value. 

The problem does not happen with float numbers, which are converted to `INF` infinity when they can't be represented anymore.

This problem is often related to the presence of the `e` character in the string, which yield a possible float number.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-float-string--\"%s-\"-is-not-representable-as-an-int,-cast-occurred.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-float-string--\"%s-\"-is-not-representable-as-an-int,-cast-occurred.html","name":"The float-string \"%s\" is not representable as an int, cast occurred","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"The string contains a numeric value, that could be parsed, even partially","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-float-string--\"%s-\"-is-not-representable-as-an-int,-cast-occurred.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

var_dump((int) 9E82);
//9223372036854775807

var_dump((float) 9E82);
//float(9.0E+82)

?>
```

## Literal Examples
+ The float-string "9E82" is not representable as an int, cast occurred

## Alternatives
+ Use the string, rather than convert it to an integer.
+ Check if the string can be converted before using the cast.
+ Compare the resulting value with ``PHP_INT_MAX``: it might be very far from the expected conversion.

## Related error messages
+ [the-float-%.*h-is-not-representable-as-an-int,-cast-occurred](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()