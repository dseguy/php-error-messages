# Unexpected character in input:  \'\\' (ASCII=92)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unexpected-character-in-input:----qascii=92r.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unexpected-character-in-input:----qascii=92r.html","name":"Unexpected character in input:  \\'\\\\' (ASCII=92)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-06-05T13:18:46+02:00","dateModified":"2026-07-13T11:03:18+02:00","description":"This linting error appears at linting time, until PHP introduced namespaces, whose separator is ``\\``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unexpected-character-in-input:----qascii=92r.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This linting error appears at linting time, until PHP introduced namespaces, whose separator is `\`. Then, it was added to the recognized characters.

## Example

```php
<?php

    use \A\B as C;

?>
```

## Alternatives
+ Upgrade to PHP 5.3 or later.
+ Replace the backslash by an underscore.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()