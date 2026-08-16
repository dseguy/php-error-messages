# Defining a custom assert() function is not allowed,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defining-a-custom-assert()-function-is-not-allowed,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defining-a-custom-assert()-function-is-not-allowed,.html","name":"Defining a custom assert() function is not allowed,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"assert() is a PHP native function, used to create assertions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/defining-a-custom-assert()-function-is-not-allowed,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
