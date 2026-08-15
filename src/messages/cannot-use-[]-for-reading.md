# Cannot use [] for reading

## Description
The append operator `[]` is a write operator: it alters the underlying variable. It cannot be used for reading, as it doesn't produce a value. Hence, it is not possible to use the append operator as an argument, or with a short assignment operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-[]-for-reading.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-[]-for-reading.html","name":"Cannot use [] for reading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The append operator ``[]`` is a write operator: it alters the underlying variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-[]-for-reading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// += needs a value to increment, which [] cannot provide
$a[] += 2; 

// When foo() is called, the value of the arguments is transmitted to the function.
// Here, $a[] has no value.
foo($a[]); 

?>
```

## Alternatives
+ Only use [] in writing context.
