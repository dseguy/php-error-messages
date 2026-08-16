# Undefined offset

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-offset.html","name":"Undefined offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-10T11:08:13+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This notice is emitted when an offset (string or integer) is being used before being defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This notice is emitted when an offset (string or integer) is being used before being defined. In a word, the elemenent at this offset is not created yet, so PHP creates it on the fly, as NULL, then uses it.

## Example

```php
<?php

echo [1,2,3][4];

?>
```

## Alternatives
+ Test the existence of the offset before usage.
+ Gives the offset a default value before usage.

In more recent PHP versions, this error message is now :ref:`undefined-array-key`.