# Defining a custom assert() function is not allowed,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defining-a-custom-assert()-function-is-not-allowed,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defining-a-custom-assert()-function-is-not-allowed,.html","name":"Defining a custom assert() function is not allowed,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-08-14T23:20:06+02:00","dateModified":"2025-02-23T09:24:54-05:00","description":"assert() is a PHP native function, used to create assertions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defining-a-custom-assert()-function-is-not-allowed,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
assert() is a PHP native function, used to create assertions. To avoid confusion, or redefinition of this function, it is not allowed to create a custom version of this function, even in a namespace.

## Example

```php
<?php

namespace X;

function assert() {}

?>
```

## Alternatives
+ Give another name to that function.
+ Make it a method.
+ Make it a Closure.

## Related error messages
+ [assert](https://www.php.net/manual/en/function.assert.php)
