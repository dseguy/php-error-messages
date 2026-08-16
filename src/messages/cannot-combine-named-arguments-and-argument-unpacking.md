# Cannot combine named arguments and argument unpacking

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-combine-named-arguments-and-argument-unpacking.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-combine-named-arguments-and-argument-unpacking.html","name":"Cannot combine named arguments and argument unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"In PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-combine-named-arguments-and-argument-unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In PHP 8.0, named parameters were introduced. They allow the naming of a parameter, which is used later to assign the value to the parameter, based on names and not on position.

Initially, it was not possible to mix unpacked arguments from an array and parameters.

## Example

```php
<?php

function foo(...$params) { 
    print_r($params); 
}

$args = [1, 2];
foo(...$args, params: 1);

?>
```

## Alternatives
+ Upgrade PHP version to 8.1 or later.
+ Move the arguments in the array, and unpack it.

## Related error messages
+ [cannot-use-argument-unpacking-after-named-arguments](cannot-use-argument-unpacking-after-named-arguments.html)
