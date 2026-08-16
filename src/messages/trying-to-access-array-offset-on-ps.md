# Trying to access array offset on %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-access-array-offset-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-access-array-offset-on-%s.html","name":"Trying to access array offset on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Null, boolean (true and false), integers and floats are not valid with the array syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-access-array-offset-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Null, boolean (true and false), integers and floats are not valid with the array syntax. That syntax uses the square brackets with an index, appended after the value.

Often, such syntax is used on returned values, which may be an array, or false (or null) in case of error: most of the time it is a valid array, but sometimes, it is a scalar type. Such usage is now reported since PHP 8.3.

## Example

```php
<?php

echo null[1];
//Warning: Trying to access array offset on null


$true = true;
echo $true['a'];
//Warning: Trying to access array offset on true

$true = false;
echo $true[[33]]; // also, invalid idnex
//Warning: Trying to access array offset on false

?>
```

## Literal Examples
+ Trying to access array offset on true
+ Trying to access array offset on false
+ Trying to access array offset on null

## Alternatives
+ Check for types before using an array syntax on a returned value.
+ Initialize variables with an array, whenever it will be used with this type later.

## Related error messages
+ [cannot-use-object-of-type-%s-as-array](cannot-use-object-of-type-%s-as-array.html)
