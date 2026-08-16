# Key element cannot be a reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/key-element-cannot-be-a-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/key-element-cannot-be-a-reference.html","name":"Key element cannot be a reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-07-29T19:56:41+02:00","dateModified":"2025-07-29T19:56:41+02:00","description":"In a foreach() loop, the value may be a reference, when it needs to be updated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/key-element-cannot-be-a-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In a foreach() loop, the value may be a reference, when it needs to be updated. The key, on the other hand, cannot be changed, and hence, cannot have a reference.

## Example

```php
<?php

foreach($array as &$key => $value) {}

?>
```

## Alternatives
+ Remove the reference from the key.
+ Use array_flip() to make the keys the values, and update them, then use the same function again.
