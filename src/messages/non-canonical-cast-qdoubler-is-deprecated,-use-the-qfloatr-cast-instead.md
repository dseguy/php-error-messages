# Non-canonical cast (double) is deprecated, use the (float) cast instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(double)-is-deprecated,-use-the-(float)-cast-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(double)-is-deprecated,-use-the-(float)-cast-instead.html","name":"Non-canonical cast (double) is deprecated, use the (float) cast instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-24T19:36:56+02:00","dateModified":"2025-09-24T19:36:56+02:00","description":"The non-canonical cast ``(double)`` has been deprecated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(double)-is-deprecated,-use-the-(float)-cast-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The non-canonical cast `(double)` has been deprecated. It should be replace by the simpler `(float)`.

## Example

```php
<?php

$a = (double) $string;

?>
```

## Alternatives
+ Use ``(float)``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[nonCanonicalCast](nonCanonicalCast)