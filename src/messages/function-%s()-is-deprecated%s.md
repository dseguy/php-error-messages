# Function %s() is deprecated%S

## Description
PHP native functions get deprecated, before being removed. This message is here to help with refactoring the code to more modern syntax, and get ready for upcoming versions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-%s()-is-deprecated%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-%s()-is-deprecated%s.html","name":"Function %s() is deprecated%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"PHP native functions get deprecated, before being removed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/function-%s()-is-deprecated%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [trait-%s-used-by-%s-is-deprecated%s](asdf)
