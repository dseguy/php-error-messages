# Using "_" as %s is deprecated since 8.4

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-_-as-ps-is-deprecated-since-8.4.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-_-as-ps-is-deprecated-since-8.4.html","name":"Using \"_\" as %s is deprecated since 8.4","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"``_`` (underscore) is a valid class name, although it has become a reserved PHP word in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-_-as-ps-is-deprecated-since-8.4.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`_` (underscore) is a valid class name, although it has become a reserved PHP word in PHP 8.4. In the future, it may be used for pattern matching, and by anticipation, it is not allowed for other usage that may ultimately conflict with it.

This applies to classes, traits, interfaces and enumerations. There is already an extension function called `_`, which is an alias of `gettext`, from the eponymous extension.

This applies in every name spaces.

## Example

```php
<?php

class _ {}

?>
```

## Alternatives
+ Use another name.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ClassUnderscore](ClassUnderscore)