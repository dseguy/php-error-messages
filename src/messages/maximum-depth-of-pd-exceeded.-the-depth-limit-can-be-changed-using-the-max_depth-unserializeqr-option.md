# Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/maximum-depth-of-pd-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserializeqr-option.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/maximum-depth-of-pd-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserializeqr-option.html","name":"Maximum depth of %d exceeded. The depth limit can be changed using the max_depth unserialize() option","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-04T18:52:08+01:00","dateModified":"2025-03-24T19:12:23+01:00","description":"PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/maximum-depth-of-pd-exceeded.-the-depth-limit-can-be-changed-using-the-max_depth-unserializeqr-option.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 7.4 introduced an option with the unserialize() function. It is called `max_depth` and it limits the number of nesting levels that unserialize allows, when producing the PHP structures. This saves memory and processing power.

## Example

```php
<?php

// 4 levels of nesting
$a = [[[[]]]];

$string = serialize($a);

print_r(unserialize($string, ['max_depth' => 2]));

?>
```

## Literal Examples
+ Maximum depth of 2 exceeded. The depth limit can be changed using the max_depth unserialize() option

## Alternatives
+ Remove the option from the call to unserialize().
+ Check the string and count the level of nesting, before calling unserialize().
