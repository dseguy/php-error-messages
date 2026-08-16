# must not be empty

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty.html","name":"must not be empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The provided parameter is of the valid type, but cannot be left empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The provided parameter is of the valid type, but cannot be left empty.

## Example

```php
<?php

print_r(explode('', 'abc')); // Not possible with an empty delimiter

print_r(str_split(1, 'abc')); 

?>
```

## Alternatives
+ When parsing data, make sure that the separator is not empty.

In previous PHP versions, this error message used to be :ref:`cannot-be-empty`.