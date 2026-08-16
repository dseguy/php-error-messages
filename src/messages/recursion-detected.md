# Recursion detected

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/recursion-detected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/recursion-detected.html","name":"Recursion detected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-03T11:09:18-05:00","dateModified":"2025-03-03T11:09:18-05:00","description":"The ``compact`` function accepts an array of arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/recursion-detected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `compact` function accepts an array of arguments. The function is actually recursive, and searches for everything recursively. This leads to potential infinite recursion, if the provided array contains a link to itself.

## Example

```php
<?php

$a = 1;
$arr1 = array('a', &$arr1);
try {
    var_dump(compact($arr1));
} catch (Error $e) {
    echo $e->getMessage() . \n;
}

?>
```

## Alternatives
+ Flatten the array into one level only.
+ Remove the self references.
+ Do not use array known to host self references, such as ``$GLOBALS``.
