# Extra data starting at offset %d of %zd bytes

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/extra-data-starting-at-offset-%d-of-%zd-bytes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/extra-data-starting-at-offset-%d-of-%zd-bytes.html","name":"Extra data starting at offset %d of %zd bytes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-15T10:08:31+01:00","dateModified":"2025-08-17T16:28:41+02:00","description":"Some extra data were found while processing the serialized string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/extra-data-starting-at-offset-%d-of-%zd-bytes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Some extra data were found while processing the serialized string. They are not needed, so they should not be there. It is recommended to investigate why too much data was provided, as it may devolve in a security issue.

There is no way to check the amount of needed data before unserializing the string.

## Example

```php
<?php

// 1 3   are too much in this string.
print_r(unserialize('O:1:"a":1:{s:8:"property";s:3:"yes". '1 3';}));

?>
```

## Literal Examples
+ Extra data starting at offset 31 of 3 bytes

## Alternatives
+ Catch the warning and review the string after execution.
+ Set up a validation of the incoming string, such as a check sum.
