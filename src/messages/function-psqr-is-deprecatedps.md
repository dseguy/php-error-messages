# Function %s() is deprecated%S

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-%s()-is-deprecated%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-%s()-is-deprecated%s.html","name":"Function %s() is deprecated%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-08-12T22:40:47+02:00","dateModified":"2026-07-25T18:45:01+02:00","description":"PHP native functions get deprecated, before being removed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-%s()-is-deprecated%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP native functions get deprecated, before being removed. This message is here to help with refactoring the code to more modern syntax, and get ready for upcoming versions.

## Example

```php
<?php

// One of the deprecated functions
echo strftime(1);

?>
```

## Literal Examples
+ Function strftime() is deprecated since 8.1, use IntlDateFormatter::format() instead

## Alternatives
+ Use the suggestion from the error message.

## Related error messages
+ [trait-%s-used-by-%s-is-deprecated%s](trait-%s-used-by-%s-is-deprecated%s.html)
