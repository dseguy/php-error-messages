# Function name must be a string

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-name-must-be-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-name-must-be-a-string.html","name":"Function name must be a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When calling a function dynamically, the name of the function, in the ``$method`` variable, must be a string, and the function must exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-name-must-be-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When calling a function dynamically, the name of the function, in the `$method` variable, must be a string, and the function must exist.

Some other scalars, such as integer, might be used as function name, although it will fail.

## Example

```php
<?php

$method = new stdClass;
$method();

?>
```

## Alternatives
+ Only use string names for dynamic call to functions.
+ Cast the variable to string before using it.

In more recent PHP versions, this error message is now :ref:`object-of-type-%s-is-not-callable`.