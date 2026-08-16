# never cannot be used as a parameter type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-cannot-be-used-as-a-parameter-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-cannot-be-used-as-a-parameter-type.html","name":"never cannot be used as a parameter type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Never is a PHP return type, that is used to indicate that a method will not return a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-cannot-be-used-as-a-parameter-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Never is a PHP return type, that is used to indicate that a method will not return a value. As such, it makes no sense to use with a parameter, as a parameter cannot return any value. Hence, the never type cannot be used with a parameter.

## Example

```php
<?php

function foo(never $n) {}

?>
```

## Alternatives
+ Remove the never type.
+ Change the never type to another type.
