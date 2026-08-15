# must be of type Countable|array, %s given

## Description
The `count()` native function only count elements that are arrays, or objects that implements the `Countable` interface. Anything else yields a fatal error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-countable|array,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-countable|array,-%s-given.html","name":"must be of type Countable|array, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``count()`` native function only count elements that are arrays, or objects that implements the ``Countable`` interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-countable|array,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$value = null;
echo count($value);

?>
```

## Alternatives
+ Check for type before using count: ``is_array`` or ``instanceof \Countable``.

In previous PHP versions, this error message used to be :ref:`parameter-must-be-an-array-or-an-object-that-implements-countable`.