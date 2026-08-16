# Non-canonical cast (integer) is deprecated, use the (int) cast instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(integer)-is-deprecated,-use-the-(int)-cast-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(integer)-is-deprecated,-use-the-(int)-cast-instead.html","name":"Non-canonical cast (integer) is deprecated, use the (int) cast instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-24T19:36:56+02:00","dateModified":"2025-09-24T19:36:56+02:00","description":"The non-canonical cast ``(integer)`` has been deprecated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(integer)-is-deprecated,-use-the-(int)-cast-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The non-canonical cast `(integer)` has been deprecated. It should be replace by the simpler `(int)`.

## Example

```php
<?php

$a = (integer) $string;

?>
```

## Alternatives
+ Use ``(int)``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[nonCanonicalCast](nonCanonicalCast)