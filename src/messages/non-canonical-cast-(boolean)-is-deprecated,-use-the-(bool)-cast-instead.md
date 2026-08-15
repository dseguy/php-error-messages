# Non-canonical cast (boolean) is deprecated, use the (bool) cast instead

## Description
The non-canonical cast `(boolean)` has been deprecated. It should be replace by the simpler `(bool)`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(boolean)-is-deprecated,-use-the-(bool)-cast-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(boolean)-is-deprecated,-use-the-(bool)-cast-instead.html","name":"Non-canonical cast (boolean) is deprecated, use the (bool) cast instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The non-canonical cast ``(boolean)`` has been deprecated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-canonical-cast-(boolean)-is-deprecated,-use-the-(bool)-cast-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = (boolean) $string;

?>
```

## Alternatives
+ Use ``(bool)``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[nonCanonicalCast](nonCanonicalCast)