# Undefined array key

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-array-key.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-array-key.html","name":"Undefined array key","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-10T11:08:04+01:00","dateModified":"2025-06-05T07:26:37+02:00","description":"This notice is emitted when an offset (string or integer) is being used before being defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-array-key.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This notice is emitted when an offset (string or integer) is being used before being defined. In a word, the element at this offset does not exist, so PHP creates it on the fly, as NULL, then uses it.

## Example

```php
<?php

// undefined array key 4
echo [1,2,3][4];

// undefined array key 'a'
echo [1,2,3]['a'];

// undefined array key 1
list($a, $b) = ['c'];

?>
```

## Alternatives
+ Test the existence of the offset before usage.
+ Gives the offset a default value before usage.
+ Check that the right operand of a list() call has enough elements to fit the left operand.

## Related error messages
+ [undefined-variable](undefined-variable.html)
+ [is-an-invalid-offset](is-an-invalid-offset.html)

In previous PHP versions, this error message used to be :ref:`undefined-offset`.