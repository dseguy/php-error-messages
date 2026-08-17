# must be a valid class name, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-class-name,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-class-name,-ps-given.html","name":"must be a valid class name, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-06T10:11:59+02:00","dateModified":"2025-04-06T10:11:59+02:00","description":"get_parent_class() expects an argument, which must be either an object, or a valid class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-class-name,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
get_parent_class() expects an argument, which must be either an object, or a valid class name. The object's class name will be used; for the valid class name, it is recommended to use the `::class` operator on the class name, and also, to check if the class exists first.

## Example

```php
<?php

$a = 1;
get_parent_class($a);

?>
```

## Literal Examples
+ must be a valid class name, null given
+ must be a valid class name, integer given

## Alternatives
+ Check that the parameter is an object.
+ Make the string a valid class name, with the ``::class`` operator.
+ Check if the string is an existing class, with a call to ``class_exists()``.
