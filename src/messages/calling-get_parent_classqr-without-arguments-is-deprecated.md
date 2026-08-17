# Calling get_parent_class() without arguments is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-get_parent_classqr-without-arguments-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-get_parent_classqr-without-arguments-is-deprecated.html","name":"Calling get_parent_class() without arguments is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-06-03T23:13:10+02:00","dateModified":"2025-05-06T07:21:26+02:00","description":"Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-get_parent_classqr-without-arguments-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Using null as a parameter for the get_class() and get_parent_class() native call is deprecated since PHP 8.3. Using the null value defaulted to the current class, so it is possible to use `$this` instead.

## Example

```php
<?php

get_parent_class();

?>
```

## Alternatives
+ Use ``$this`` as an argument.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[get_classWithoutArgument](get_classWithoutArgument)