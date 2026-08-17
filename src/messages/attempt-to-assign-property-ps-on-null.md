# Attempt to assign property "%s" on null

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-assign-property-ps-on-null.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-assign-property-ps-on-null.html","name":"Attempt to assign property \"%s\" on null","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:45+00:00","dateModified":"2026-03-31T09:10:45+00:00","description":"``null`` is not an object, and it can't be used as such","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-assign-property-ps-on-null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`null` is not an object, and it can't be used as such. Until PHP 8.0, the engine would automatically create a `stdClass` object, and replace the `null` value with it. This is not the case anymore.

## Example

```php
<?php

$a = null;

$a->b = 1;

?>
```

## Literal Examples
+ Attempt to assign property "b" on null

## Alternatives
+ Instantiate any object and replace ``null`` with it.
+ Explicitly instantiate a ``stdClass`` object and replace ``null`` with it.
+ Remove the property usage.
+ Use another variable to use this property.

In previous PHP versions, this error message used to be :ref:`creating-default-object-from-empty-value`.